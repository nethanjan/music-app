<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;
use App\Models\Genre;
use App\Models\Instrument;  
use App\Models\Mood;
use App\Models\EnergyLevel;
// use App\Models\Song;
use App\Models\UserFavourites;
use Aws\Sns\Message;
use Aws\Sns\MessageValidator;
use Carbon\Carbon;

class MainPageController extends Controller
{

    /**
     * Load default search page
     */
    public function search()
    {
        $user = Auth::user();
        $genres = Genre::all();
        $instruments = Instrument::all();
        $moods = Mood::all();
        $energyLevels = EnergyLevel::all();

        $songs = DB::table('songs')
            ->select('songs.*', 'user_favourites.user_id')
            ->leftJoin('user_favourites', function($join) use ($user)
            {
                $join->on('songs.id', '=', 'user_favourites.song_id')
                ->where('user_favourites.user_id', '=', $user->id);
            })
            ->whereNotNull('songs.path')
            ->orderBy('songs.id', 'asc')
            ->groupBy('songs.id', 'user_favourites.user_id')
            ->paginate(10);

        return view('search.genre', ['genres' => $genres, 'instruments' => $instruments, 'moods' => $moods, 'energyLevels' => $energyLevels, 'songs' => $songs ]);
    }

    /**
     * Load results on load more click
     * @params $request - current showing items & filters
     */
    public function searchLoadMore(Request $request)
    {

        if($request->ajax()){

            $user = Auth::user();

            $query = DB::table('songs as s')->select('s.*', 'uf.user_id');

            $query->leftJoin('user_favourites as uf', function($join) use ($user)
            {
                $join->on('s.id', '=', 'uf.song_id')
                ->where('uf.user_id', '=', $user->id);
            });

            if(isset($request->filter['genre']) && count($request->filter['genre'])){
                $query->join('song_genre_mapping as g', 'g.song_id', '=', 's.id');
            }
            if(isset($request->filter['instrument']) && count($request->filter['instrument'])){
                $query->join('song_instrument_mapping as i', 'i.song_id', '=', 's.id');
            }
            if(isset($request->filter['energy']) && count($request->filter['energy'])){
                $query->join('song_energy_level_mapping as e', 'e.song_id', '=', 's.id');
            }
            if(isset($request->filter['mood']) && count($request->filter['mood'])){
                $query->join('song_mood_mapping as m', 'm.song_id', '=', 's.id');
            }

            if(isset($request->filter['genre']) && count($request->filter['genre'])){
                $query->whereIn('g.genre_id', $request->filter['genre']);
            }
            if(isset($request->filter['instrument']) && count($request->filter['instrument'])){
                $query->whereIn('i.instrument_id', $request->filter['instrument']);
            }
            if(isset($request->filter['energy']) && count($request->filter['energy'])){
                $query->whereIn('e.energy_level_id', $request->filter['energy']);
            }
            if(isset($request->filter['mood']) && count($request->filter['mood'])){
                $query->whereIn('m.mood_id', $request->filter['mood']);
            }
            $query->whereNotNull('s.path');
            $query->orderBy('s.id', 'asc');

            $skip = $request->skip;
            $query->groupBy('s.id', 'uf.user_id');

            $songs = $query->skip($skip)->take(10)->get();
            return response()->json($songs);
        }else{
            return response()->json('Direct Access Not Allowed!!');
        }
    }

    /**
     * Mark audio favourite for a user
     */
    public function makeFavourite(Request $request)
    {

        if($request->ajax()){
            $user = Auth::user();
            $songId = $request->songId;
            $userFavourites = UserFavourites::create([
                'user_id' => $user->id,
                'song_id' => $songId,
            ]);
            return response()->json($userFavourites);
        }else{
            return response()->json('Direct Access Not Allowed!!');
        }
    }

    /**
     * Remove audio from favourite list
     */
    public function removeFavourite(Request $request)
    {

        if($request->ajax()){
            $user = Auth::user();
            $songId = $request->songId;

            $userFavourites = UserFavourites::where('user_id', '=', $user->id)
                ->where('song_id', '=', $songId)
                ->delete();

            return response()->json($userFavourites);
        }else{
            return response()->json('Direct Access Not Allowed!!');
        }
    }

    /**
     * Filter results
     */
    public function filter(Request $request)
    {

        if($request->ajax()){
            $user = Auth::user(); // fetch user favourites

            $query = DB::table('songs as s')->select('s.*', 'uf.user_id');

            $query->leftJoin('user_favourites as uf', function($join) use ($user)
            {
                $join->on('s.id', '=', 'uf.song_id')
                ->where('uf.user_id', '=', $user->id);
            });
            
            // Join
            if(isset($request->filter['genre']) && count($request->filter['genre'])){
                $query->join('song_genre_mapping as g', 'g.song_id', '=', 's.id');
            }
            if(isset($request->filter['instrument']) && count($request->filter['instrument'])){
                $query->join('song_instrument_mapping as i', 'i.song_id', '=', 's.id');
            }
            if(isset($request->filter['energy']) && count($request->filter['energy'])){
                $query->join('song_energy_level_mapping as e', 'e.song_id', '=', 's.id');
            }
            if(isset($request->filter['mood']) && count($request->filter['mood'])){
                $query->join('song_mood_mapping as m', 'm.song_id', '=', 's.id');
            }

            // Where
            if(isset($request->filter['genre']) && count($request->filter['genre'])){
                $query->whereIn('g.genre_id', $request->filter['genre']);
            }
            if(isset($request->filter['instrument']) && count($request->filter['instrument'])){
                $query->whereIn('i.instrument_id', $request->filter['instrument']);
            }
            if(isset($request->filter['energy']) && count($request->filter['energy'])){
                $query->whereIn('e.energy_level_id', $request->filter['energy']);
            }
            if(isset($request->filter['mood']) && count($request->filter['mood'])){
                $query->whereIn('m.mood_id', $request->filter['mood']);
            }
            $query->whereNotNull('s.path');
            $query->groupBy('s.id', 'uf.user_id');

            $results = $query->paginate(10);

            return response()->json($results);
        }else{
            return response()->json('Direct Access Not Allowed!!');
        }
    }

    public function verify()
    {
        return view('verify');
    }

    public function transcodeSns()
    {
        try {
            if (isset($_SERVER['HTTP_X_AMZ_SNS_MESSAGE_TYPE'])) {
                // Retrieve the message
                $message = Message::fromRawPostData();
            
                // make validator instance
                $validator = new MessageValidator();
                try {
                    $validator->validate($message);
                } catch (InvalidSnsMessageException $e) {
                    http_response_code(404);
                    error_log('SNS Message Validation Error: ' . $e->getMessage());
                    die();
                }
                try {
                    if ($validator->isValid($message)) {
                            error_log('valid message');

                            if ($message['Type'] === 'Notification') {
                                    $message = json_decode($message['Message']);

                                    $file_name_array = explode("/",$message->input->key);
                                    $file_name = $file_name_array[count($file_name_array) - 1];
                                    error_log($file_name);
                                    $new_file_name = explode(".",$file_name);
                                    $new_file_path = $message->outputKeyPrefix . $new_file_name[0] . '.mp3';
                                    error_log($new_file_path);
                                    $query = DB::table('songs as s')
                                        ->where('s.name', '=', $file_name)
                                        ->update(['path' => $new_file_path]);
                                    return response()->json(['success' => 'success'], 200);
                            }
                    

                    } else {                                
                            error_log('invalid_message');
                    }
                } catch (Exception $e) {
                    error_log('Something went wrong');
                }
            } else {
                return response('SNS message type header not provided', 400);
            }
        } catch (Exception $e) {
            return response('Error', 400);
        }
    }

    public function verifyEmail(Request $request){

        if ($request->has('token')) {
            $user = DB::table('users as u')
            ->where('u.verification_token', $request->token)
            ->select('u.*')
            ->first();

            $query = DB::table('users as u')
                    ->where('u.id', $user->id)
                    ->update(['email_verified_at' =>  Carbon::now()->format('Y-m-d H:i:s'), 'verification_token' => null]);

            if($user){
                return view('emailVerified');
            }
            return view('emailVerifiedFailed');
        }
        return view('emailVerifiedFailed');
    }

}
