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
use App\Models\Song;
use App\Models\UserFavourites;

class MainPageController extends Controller
{

    public function search()
    {
        $genres = Genre::all();
        $instruments = Instrument::all();
        $moods = Mood::all();
        $energyLevels = EnergyLevel::all();

        $songs = DB::table('songs')->paginate(10);

        return view('search.genre', ['genres' => $genres, 'instruments' => $instruments, 'moods' => $moods, 'energyLevels' => $energyLevels, 'songs' => $songs ]);
    }

    public function searchLoadMore(Request $request)
    {

        if($request->ajax()){

            $query = DB::table('songs as s')->select('s.*');

            // if(isset($request->filter['genre']) && count($request->filter['genre'])){
            //     $query->join('song_genre_mapping as g', 'g.song_id', '=', 's.id');
            // }
            if(isset($request->filter['instrument']) && count($request->filter['instrument'])){
                $query->join('song_instrument_mapping as i', 'i.song_id', '=', 's.id');
            }
            if(isset($request->filter['energy']) && count($request->filter['energy'])){
                $query->join('song_energy_level_mapping as e', 'e.song_id', '=', 's.id');
            }
            if(isset($request->filter['mood']) && count($request->filter['mood'])){
                $query->join('song_mood_mapping as m', 'm.song_id', '=', 's.id');
            }

            // if(isset($request->filter['genre']) && count($request->filter['genre'])){
            //     $query->whereIn('g.genre_id', $request->filter['genre']);
            // }
            if(isset($request->filter['instrument']) && count($request->filter['instrument'])){
                $query->whereIn('i.instrument_id', $request->filter['instrument']);
            }
            if(isset($request->filter['energy']) && count($request->filter['energy'])){
                $query->whereIn('e.energy_level_id', $request->filter['energy']);
            }
            if(isset($request->filter['mood']) && count($request->filter['mood'])){
                $query->whereIn('m.mood_id', $request->filter['mood']);
            }

            $skip = $request->skip;
            $query->groupBy('s.id');

            $songs = $query->skip($skip)->take(10)->get();
            return response()->json($songs);
        }else{
            return response()->json('Direct Access Not Allowed!!');
        }
    }

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

    public function filter(Request $request)
    {

        if($request->ajax()){
            $user = Auth::user(); // fetch user favourites

            $query = DB::table('songs as s')->select('s.*');
            // dd($request->filter);
            // if(isset($request->filter['genre']) && count($request->filter['genre'])){
            //     $query->join('song_genre_mapping as g', 'g.song_id', '=', 's.id');
            // }
            if(isset($request->filter['instrument']) && count($request->filter['instrument'])){
                $query->join('song_instrument_mapping as i', 'i.song_id', '=', 's.id');
            }
            if(isset($request->filter['energy']) && count($request->filter['energy'])){
                $query->join('song_energy_level_mapping as e', 'e.song_id', '=', 's.id');
            }
            if(isset($request->filter['mood']) && count($request->filter['mood'])){
                $query->join('song_mood_mapping as m', 'm.song_id', '=', 's.id');
            }

            // if(isset($request->filter['genre']) && count($request->filter['genre'])){
            //     $query->whereIn('g.genre_id', $request->filter['genre']);
            // }
            if(isset($request->filter['instrument']) && count($request->filter['instrument'])){
                $query->whereIn('i.instrument_id', $request->filter['instrument']);
            }
            if(isset($request->filter['energy']) && count($request->filter['energy'])){
                $query->whereIn('e.energy_level_id', $request->filter['energy']);
            }
            if(isset($request->filter['mood']) && count($request->filter['mood'])){
                $query->whereIn('m.mood_id', $request->filter['mood']);
            }

            $query->groupBy('s.id');

            $results = $query->paginate(10);

            return response()->json($results);
        }else{
            return response()->json('Direct Access Not Allowed!!');
        }
    }

    // public function searchInstrument()
    // {
    //     return view('search.instrument');
    // }

    // public function searchEnergyLevel()
    // {
    //     return view('search.energy');
    // }

    // public function searchMood()
    // {
    //     return view('search.mood');
    // }

    public function verify()
    {
        return view('verify');
    }

}
