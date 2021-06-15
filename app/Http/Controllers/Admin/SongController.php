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
        $validator = $request->validate([
            'file'     => 'required|mimes:mp3,wav,aif',
        ], 
        [
            'file.required' => 'Song file is required',
            'file.mimes' => 'Please select a valid file type',
        ]);

        if($request->hasFile('file')) {

            $file = $request->file('file');

            $song = new Song;
            $song->recordId = $request->recordId;
            $song->name = $file->getClientOriginalName();
            $song->length = '0';
            $song->sourcePath = null;
            $song->path = null;
            $song->save();

            $song->genres()->attach($request->genres);
            $song->instruments()->attach($request->instruments);
            $song->energyLevels()->attach($request->energyLevels);
            $song->moods()->attach($request->moods);
            
            $fileName = $file->getClientOriginalName();
            $file->storeAs('avatars/'.$song->id.'/', $fileName, 's3');

            return redirect('/admin/songs')->with('success','New song upload successful!');
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
        $validator = $request->validate([
            'file'     => 'required',
            'file.*' => 'mimes:mp3,wav,aif'
        ], 
        [
            'file.required' => 'Song files are required',
            'mimes' => 'Please select a valid file type',
        ]);

        if($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $song = new Song;
                $song->recordId = null;
                $song->name = $file->getClientOriginalName();
                $song->length = '0';
                $song->sourcePath = null;
                $song->path = null;
                $song->save();
                
                $fileName = $file->getClientOriginalName();
                $file->storeAs('avatars/'.$song->id.'/', $fileName, 's3');
            }
            return redirect('/admin/songs')->with('success','New songs upload successful!');
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
        $song = Song::with('genres')
            ->with('instruments')
            ->with('energyLevels')
            ->with('moods')
            ->find($id);

        return view('admin.songs.edit', [
            'song' => Song::find($id),
            'genres' => Genre::all(), 
            'instruments' => Instrument::all(),
            'energyLevels' => EnergyLevel::all(),
            'moods' => Mood::all()
            ]);
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
