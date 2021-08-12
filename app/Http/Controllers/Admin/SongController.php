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
    public function index(Request $request)
    {
        $name = $request->query('name');
        $genre = $request->query('genre');
        $instrument = $request->query('instrument');
        $energyLevel = $request->query('energyLevel');
        $mood = $request->query('mood');

        if($name || $genre || $instrument || $energyLevel || $mood) {

            $query = Song::query();
            if($name){
                $query = $query->where('name', 'like', "%{$name}%");
            }
            if($genre){
                $query = $query->whereHas('genres', function ($q) use ($genre) {
                    $q->where('genre_id', $genre);
                });
            }
            if($instrument){
                $query = $query->whereHas('instruments', function ($q) use ($instrument) {
                    $q->where('instrument_id', $instrument);
                });
            }
            if($energyLevel){
                $query = $query->whereHas('energyLevels', function ($q) use ($energyLevel) {
                    $q->where('energy_level_id', $energyLevel);
                });
            }
            if($mood){
                $query = $query->whereHas('moods', function ($q) use ($mood) {
                    $q->where('mood_id', $mood);
                });
            }

            $songs = $query->paginate(10)->appends(request()->query());

            return view('admin.songs.index', [
                'songs' => $songs, 
                'genres' => Genre::all(),
                'instruments' => Instrument::all(),
                'energyLevels' => EnergyLevel::all(),
                'moods' => Mood::all()
                ]
            );
        } else {
            return view('admin.songs.index', [
                'songs' => Song::paginate(10), 
                'genres' => Genre::all(),
                'instruments' => Instrument::all(),
                'energyLevels' => EnergyLevel::all(),
                'moods' => Mood::all()
                ]
            );
        }
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
            $file->storeAs('files/'.$song->id.'/', $fileName, 's3');

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
                $file->storeAs('files/'.$song->id.'/', $fileName, 's3');

                $song->genres()->attach($request->genres);
                $song->instruments()->attach($request->instruments);
                $song->energyLevels()->attach($request->energyLevels);
                $song->moods()->attach($request->moods);
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
        $song = Song::find($id);

        $song->recordId = $request->recordId;
        $song->save();

        $song->genres()->sync($request->genres);
        $song->instruments()->sync($request->instruments);
        $song->energyLevels()->sync($request->energyLevels);
        $song->moods()->sync($request->moods);


        return redirect('/admin/songs')->with('success','Song update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Song::destroy($id);
        return redirect(route('admin.songs.index'));
    }
}
