<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

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

    public function forgotPassword()
    {
        return view('forgotPassword');
    }

    public function sendForgotPassword(Request $request)
    {
        $validator = $request->validate([
            'email'     => 'required',
        ],
        [
            'email.required' => 'Email address is required',
        ]);

        $user = DB::table('users as u')
            ->where('u.email', $request->email)
            ->select('u.*')
            ->first();
        if($user){
            $to_name = $user->fname;
            $to_email = $user->email;
            $full_name = $user->fname.' '. $user->lname;
            $data = array('name'=> $full_name, 'body' => "Reset password mail");
            Mail::send('emails.passwordResetmail', $data, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                ->subject('Reset Password - Barking Owl');
                $message->from('noreply.barkingowl@gmail.com','Reset Password');
            });

            return redirect()->route('forgot-password')
                            ->with('success','A link to reset your password has been sent to your email account.');
        } else {
            return redirect()->route('forgot-password')
                            ->with('success','Email address not found.');
        }
        
    }

    public function verifyEmail(){
        return view('emailVerified');
    }
}
