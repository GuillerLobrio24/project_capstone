<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B2R201;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B2R201Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b2r201 = B2R201::all();
        return view('room.b2r201', compact('b2r201'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $b2r201subject = $request->input('subject_name_code');
        $b2r201professor = $request->input('subject_professor');
        $b2r201schedulefrom = $request->input('subject_schedulefrom');
        $b2r201scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B2R201;
        $dropdown->b2r201subject = $b2r201subject;
        $dropdown->b2r201professor = $b2r201professor;
        $dropdown->b2r201schedulefrom = $b2r201schedulefrom;
        $dropdown->b2r201scheduleto = $b2r201scheduleto;
        $dropdown->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleb2r201 = B2R201::find($id);
        return view('room.b2r201_view')->with('singleb2r201', $singleb2r201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb2r201 = B2R201::find($id);

        return view('room.b2r201_edit')->with('editb2r201', $editb2r201);
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
        $updateb2r201 = B2R201::find($id);
        $input =$request->all();
        $updateb2r201->update($input);

        return redirect('b2r201');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B2R201::destroy($id);
        return redirect('b2r201');
    }
}
