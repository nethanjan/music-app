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
            $skip = $request->skip;
            $take = 10;
            $songs = Song::skip($skip)->take($take)->get();
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

    public function searchInstrument()
    {
        return view('search.instrument');
    }

    public function searchEnergyLevel()
    {
        return view('search.energy');
    }

    public function searchMood()
    {
        return view('search.mood');
    }

    public function verify()
    {
        return view('verify');
    }

}
