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

    protected function redirectTo()
    {
        $user = Auth::user();
        if ($user->roles()->first()->name == 'Admin') {
            return redirect()->route('search');
        }
        return redirect()->route('search');
    }

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
            $user = Auth::user();
            if ($user->roles()->first()->name == 'Admin') {
                return redirect('/admin');
            }
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

        $token = md5(rand(1, 10) . microtime());
        $user = DB::table('users as u')
            ->where('u.email', $request->email)
            ->select('u.*')
            ->first();

        if($user){

            $query = DB::table('users as u')
                ->where('u.email', $request->email)
                ->update(['reset_password_token' => $token]);

            $to_name = $user->fname;
            $to_email = $user->email;
            $full_name = $user->fname.' '. $user->lname;
            $data = array('name'=> $full_name, 'body' => "Reset password mail", 'token' => $token);
            Mail::send('emails.passwordResetmail', $data, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                ->subject('Reset Password - Barking Owl');
                $message->from('noreply.barkingowl@gmail.com','Reset Password');
            });

            return redirect()->route('forgot-password')
                            ->with('success','We’ve sent through your password reset email!');
        } else {
            return redirect()->route('forgot-password')
                            ->with('success','Email address not found.');
        }
        
    }

    public function passwordResetView(Request $request)
    {
        $token = null;
        if ($request->has('token')) {
            $token = $request->token;
        }
        
        return view('passwordReset', ['token' => $token]);
    }

    public function passwordResetPost(Request $request)
    {

        $validator = $request->validate([
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ],
        [
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters',
            'password.confirmed' => 'Passwords does not match',
            'password_confirmation.required' => 'Confirm password is required',
        ]);

        if ($request->token) {
            try{
                $user = DB::table('users as u')
                ->where('u.reset_password_token', $request->token)
                ->select('u.*')
                ->first();
                if($user){
                    $query = DB::table('users as u')
                    ->where('u.id', $user->id)
                    ->update(['password' =>  bcrypt($request->password), 'reset_password_token' => null]);

                return redirect()->route('password-reset')
                    ->with('success','Password reset sucessful. Please login.');
                }
                return redirect()->route('password-reset')
                    ->with('success','Invalid password reset link.');
            } catch (\Exception $e){
                return redirect()->route('password-reset')
                    ->with('success','Invalid password reset link.');
            }
        } else {
            return redirect()->route('password-reset')
                ->with('success','Invalid password reset link.');
        }
    }
}
