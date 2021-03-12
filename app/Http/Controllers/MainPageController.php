<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MainPageController extends Controller
{

    public function searchGenre()
    {
        return view('search.genre');
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
