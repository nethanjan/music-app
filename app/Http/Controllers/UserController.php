<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\UserFavourites;

class UserController extends Controller
{

    public function account()
    {
        $user = Auth::user();
        return view('user.account', ['user' => $user]);
    }

    public function accountUpdate(Request $request)
    {
        $user = Auth::user();
        $validator = $request->validate([
            'fname'     => 'required',
            'lname'     => 'required',
            'email'     => 'required|email|unique:users,id,'."$user->id".',id',
            'password'  => 'nullable|min:6'
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

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;

        if($request->password){
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('my-account')
                        ->with('success','You successfully changed your details!');
    }

    public function favourites()
    {
        $user = Auth::user();

        $user_favourites = DB::table('songs as s')
            ->join('user_favourites as uf', 's.id', '=', 'uf.song_id')
            ->join('users as u', 'uf.user_id', '=', 'u.id')
            ->where('u.id', $user->id)
            ->select('s.*')
            ->paginate(10);
            // dd($user_favourites);

        return view('user.favourites', ['user_favourites' => $user_favourites, 'total' => count($user_favourites) ]);
    }

    public function favouritesLoadMore(Request $request)
    {

        if($request->ajax()){

            $user = Auth::user();
            $skip = $request->skip;

            $user_favourites = DB::table('songs as s')
            ->join('user_favourites as uf', 's.id', '=', 'uf.song_id')
            ->join('users as u', 'uf.user_id', '=', 'u.id')
            ->where('u.id', $user->id)
            ->select('s.*')
            ->skip($skip)->take(10)->get();

            $results = DB::table('songs as s')
            ->join('user_favourites as uf', 's.id', '=', 'uf.song_id')
            ->join('users as u', 'uf.user_id', '=', 'u.id')
            ->where('u.id', $user->id)
            ->select('s.*')
            ->get();
            $total = count($results);
            
            return response()->json([ 'results' => $user_favourites, 'total' => $total]);
        }else{
            return response()->json('Direct Access Not Allowed!!');
        }
    }

    public function verify()
    {
        return view('verify');
    }

    public function resendVerify()
    {
        $user = Auth::user();
        $token = md5(rand(1, 10) . microtime());

        $user->verification_token = $token;
        $user->save();

        $to_name = $user->fname;
        $to_email = $user->email;
        $full_name = $user->fname.' '. $user->lname;
        $data = array('name'=> $full_name, 'body' => "Welcome mail", 'token' => $token);
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Welcome to Barking Owl');
            $message->from('noreply.barkingowl@gmail.com','Please Verify');
        });

        return redirect()->route('verify')
                        ->with('success','We???ve sent through your password reset email!');
    }

}
