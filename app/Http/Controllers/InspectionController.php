<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inspection;
use Session;

class InspectionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inspections = Inspection::all();
        return view('inspections.index')->withInspections($inspections);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inspections.create');
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
        $this->validate($request, array(
          'notes' => 'required|max:255',
        ));

        // Store in the database
        $inspection = new Inspection;

        $inspection->notes = $request->notes;
        $inspection->hive = $request->hive;
        $inspection->temperament = $request->temperament;
        $inspection->cleanliness = $request->cleanliness;
        $inspection->brood = $request->brood;
        $inspection->stores = $request->stores;
        $inspection->room = $request->room;
        $inspection->health = $request->health;
        $inspection->varroa = $request->varroa;
        $inspection->feed = $request->feed;
        $inspection->supers = $request->supers;
        $inspection->weather = $request->weather;

        $inspection->save();

        Session::flash('success', 'The inspection was successfully saved!');

        return redirect()->route('inspections.show', $inspection->id);
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
        $inspection = Inspection::find($id);
        return view('inspections.show')->withInspection($inspection);
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
        return view('inspections.index');
    }
}
