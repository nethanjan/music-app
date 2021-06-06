<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Instrument;

class InstrumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.instruments.index', ['instruments' => Instrument::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instruments.create');
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
            'name'     => 'required|unique:instruments',
        ], 
        [
            'name.required' => 'Instrument name is required',
            'name.unique' => 'Instrument name is already in use',
        ]);

        $instrument = new Instrument;
        $instrument->name = $request->name;
        $instrument->save();

        return redirect('/admin/instruments')->with('success','New Instrument successfully created!');
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
        return view('admin.instruments.edit', ['instrument' => Instrument::find($id)]);
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
            'name.required' => 'Instrument name is required',
        ]);

        $instrument = Instrument::find($id);
        $instrument->name = $request->name;
        $instrument->save();

        return redirect('/admin/instruments')->with('success','Instrument details update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Instrument::destroy($id);
        return redirect(route('admin.instruments.index'));
    }
}
