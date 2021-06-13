<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Song;
use App\Models\Genre;
use App\Models\Instrument;
use App\Models\EnergyLevel;
use App\Models\Mood;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.songs.index', ['songs' => Song::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.songs.create', [
            'genres' => Genre::all(), 
            'instruments' => Instrument::all(),
            'energyLevels' => EnergyLevel::all(),
            'moods' => Mood::all()
            ]);
    }

    /**
     * Show the form for bulk upload.
     *
     * @return \Illuminate\Http\Response
     */
    public function bulkCreate()
    {
        return view('admin.songs.bulk-create', [
            'genres' => Genre::all(), 
            'instruments' => Instrument::all(),
            'energyLevels' => EnergyLevel::all(),
            'moods' => Mood::all()
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $file->storeAs('avatars/', $fileName, 's3');
            dd($fileName);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bulkStore(Request $request)
    {
        if($request->hasFile('file')){
            foreach ($request->file('file') as $file) { 
                $fileName = $file->getClientOriginalName();
                $file->storeAs('avatars/', $fileName, 's3');
            }
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
