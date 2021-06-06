<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\EnergyLevel;

class EnergyLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.energy-levels.index', ['energyLevels' => EnergyLevel::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.energy-levels.create');
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
            'name'     => 'required|unique:energy_levels',
        ], 
        [
            'name.required' => 'Energy Level name is required',
            'name.unique' => 'Energy Level name is already in use',
        ]);

        $energyLevel = new EnergyLevel;
        $energyLevel->name = $request->name;
        $energyLevel->save();

        return redirect('/admin/energy-levels')->with('success','New Energy Level successfully created!');
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
        return view('admin.energy-levels.edit', ['energyLevel' => EnergyLevel::find($id)]);
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
            'name.required' => 'Energy Level name is required',
        ]);

        $energyLevel = EnergyLevel::find($id);
        $energyLevel->name = $request->name;
        $energyLevel->save();

        return redirect('/admin/energy-levels')->with('success','Energy Level details update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EnergyLevel::destroy($id);
        return redirect(route('admin.energy-levels.index'));
    }
}
