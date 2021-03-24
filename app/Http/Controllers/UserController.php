<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

            return response()->json($user_favourites);
        }else{
            return response()->json('Direct Access Not Allowed!!');
        }
    }

    public function verify()
    {
        return view('verify');
    }

}
