<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class RegisterController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/search-by-genre';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function home()
    {
        return view('home');
    }

    public function show()
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $validator = $request->validate([
            'fname'     => 'required',
            'lname'     => 'required',
            'email'     => 'required|unique:users|email',
            'password'  => 'required|min:6'
        ], 
        [
            'fname.required' => 'First name is required',
            'lname.required' => 'Last name is required',
            'email.required' => 'Email address is required',
            'email.email' => 'Email address must be valid email',
            'email.unique' => 'Email address is already registered',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters'
        ]);

        $user = User::create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        auth()->login($user);

        return redirect()->route('verify');
        
    }

    public function verify()
    {
        return view('verify');
    }
}
