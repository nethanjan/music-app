<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/search';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function show()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $validator = $request->validate([
            'email'     => 'required',
            'password'  => 'required'
        ],
        [
            'email.required' => 'Email address is required',
            'password.required' => 'Password is required'
        ]);

        if (Auth::attempt($validator)) {
            return redirect()->route('search');
        } else {
            return back()->with('error', 'Incorrect Email or Password')->withInput();
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('home');
    }
}
