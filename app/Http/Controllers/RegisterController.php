<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/search';

    

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function test()
    {
        $to_name = "test User";
        $to_email = 'nethanjanan@gmail.com';
        $data = array('name'=> 'Test User', 'body' => "A test mail");
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Welcome to Barking Owl');
            $message->from('noreply.barkingowl@gmail.com','Please Verify');
        });

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
        
        $token = md5(rand(1, 10) . microtime());
        $user = User::create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'verification_token' => $token
        ]);

        $roles = Role::where('id', 2)->get();
        $user->roles()->attach($roles[0]->id);
        
        $to_name = $request['fname'];
        $to_email = $request['email'];
        $full_name = $request['fname'].' '. $request['lname'];
        $data = array('name'=> $full_name, 'body' => "Welcome mail", 'token' => $token);
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Welcome to Barking Owl');
            $message->from('noreply.barkingowl@gmail.com','Please Verify');
        });

        auth()->login($user);

        return redirect()->route('verify');
        
    }

    public function verify()
    {
        return view('verify');
    }
}
