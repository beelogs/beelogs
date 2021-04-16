<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apiary;
use Session;

class ApiaryController extends Controller
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
        $apiaries = Apiary::all();
        return view('apiaries.index')->withApiaries($apiaries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Create Apiary
        return view('apiaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the data
        $this->validate($request, array(
          'name' => 'required',
          'description' => 'required|max:255',
          'latitude' => 'required|max:255',
          'longitude' => 'required|max:255'
        ));

        // Store in the database
        $apiary = new Apiary;

        $apiary->name = $request->name;
        $apiary->description = $request->description;
        $apiary->latitude = $request->latitude;
        $apiary->longitude = $request->longitude;

        $apiary->save();

        Session::flash('success', 'The apiary was successfully saved!');

        return redirect()->route('apiaries.show', $apiary->id);
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
        $apiary = Apiary::find($id);
        return view('apiaries.show')->withApiary($apiary);
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
        $apiary = Apiary::find($id);
        return view('apiaries.edit')->withApiary($apiary);
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
        $this->validate($request, array(
            'name' => 'required',
            'description' => 'required|max:255',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255'
        ));

        $apiary = Apiary::find($id);
        $apiary->name = $request->input('name');
        $apiary->description = $request->input('description');
        $apiary->latitude = $request->input('latitude');
        $apiary->longitude = $request->input('longitude');
        $apiary->save();

        Session::flash('success', 'This apiary has been successfully updated.');

        return redirect()->route('apiaries.show', $apiary->id);
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
        $apiary = Apiary::find($id);

        $apiary->delete();

        Session::flash('success', 'The apiary was successfully deleted.');

        return redirect()->route('apiaries.index');
    }
}
