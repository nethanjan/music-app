<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->query('name');
        $email = $request->query('email');
        if($name || $email) {
            
            return view('admin.users.index', [
                'users' => User::where('email', 'like', "%{$email}%")
                        ->where(function($query) use ($name) {
                            $query->where('fname', 'like', "%{$name}%")
                            ->orWhere('lname', 'like', "%{$name}%");
                        })
                        ->paginate(10)
                        ->appends(request()->query()), 
                'name' => $name,
                'email' => $email
                ]
            );
        } else {
            return view('admin.users.index', ['users' => User::paginate(10), 'name' => '', 'email' => '']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.index', ['users' => Role::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_favourites = DB::table('songs as s')
            ->join('user_favourites as uf', 's.id', '=', 'uf.song_id')
            ->join('users as u', 'uf.user_id', '=', 'u.id')
            ->where('u.id', $id)
            ->select('s.*')
            ->paginate(10);

        return view('admin.users.view', ['user' => User::find($id), 'user_favourites' => $user_favourites]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.users.edit', ['user' => User::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'fname'     => 'required',
            'lname'     => 'required',
            'email'     => 'required|email|unique:users,id,'."$id".',id',
        ], 
        [
            'fname.required' => 'First name is required',
            'lname.required' => 'Last name is required',
            'email.required' => 'Email address is required',
            'email.email' => 'Email address must be valid email',
            'email.unique' => 'Email address is already registered for another user',
        ]);

        $user = User::find($id);

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;

        $user->save();

        return redirect('/admin/users')->with('success','User details update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect(route('admin.users.index'));
    }
}
