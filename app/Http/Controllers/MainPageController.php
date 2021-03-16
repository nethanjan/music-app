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
use App\Models\Songs;

class MainPageController extends Controller
{

    public function searchGenre()
    {
        $genres = Genre::all();
        $instruments = Instrument::all();
        $moods = Mood::all();
        $energyLevels = EnergyLevel::all();

        $songs = DB::table('songs')->paginate(10);

        return view('search.genre', ['genres' => $genres, 'instruments' => $instruments, 'moods' => $moods, 'energyLevels' => $energyLevels, 'songs' => $songs ]);
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
