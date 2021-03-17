<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;
use App\Models\Genre;

class UserController extends Controller
{

    public function account()
    {
        return view('user.account');
    }

    public function favourites()
    {
        return view('user.favourites');
    }

    public function verify()
    {
        return view('verify');
    }

}
