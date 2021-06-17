<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = $request->query('name');
        if($filter) {
            return view('admin.genres.index', [
                'genres' => Genre::where('name', 'like', "%{$filter}%")->paginate(10)->appends(request()->query()), 
                'name' => $filter
                ]
            );
        } else {
            return view('admin.genres.index', ['genres' => Genre::paginate(10), 'name' => '']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name'     => 'required|unique:genres',
        ], 
        [
            'name.required' => 'Genre name is required',
            'name.unique' => 'Genre name is already in use',
        ]);

        $genre = new Genre;
        $genre->name = $request->name;
        $genre->save();

        return redirect('/admin/genres')->with('success','New Genre successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.genres.edit', ['genre' => Genre::find($id)]);
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
            'name'     => 'required',
        ], 
        [
            'name.required' => 'Genre name is required',
        ]);

        $genre = Genre::find($id);
        $genre->name = $request->name;
        $genre->save();

        return redirect('/admin/genres')->with('success','Genre details update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Genre::destroy($id);
        return redirect(route('admin.genres.index'));
    }
}
