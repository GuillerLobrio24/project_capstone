<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B2R303;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B2R303Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b2r303 = B2R303::all();
        return view('room.b2r303', compact('b2r303'));
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
        $b2r303subject = $request->input('subject_name_code');
        $b2r303professor = $request->input('subject_professor');
        $b2r303schedulefrom = $request->input('subject_schedulefrom');
        $b2r303scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B2R303;
        $dropdown->b2r303subject = $b2r303subject;
        $dropdown->b2r303professor = $b2r303professor;
        $dropdown->b2r303schedulefrom = $b2r303schedulefrom;
        $dropdown->b2r303scheduleto = $b2r303scheduleto;
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
        $singleb2r303 = B2R303::find($id);
        return view('room.b2r303_view')->with('singleb2r303', $singleb2r303);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb2r303 = B2R303::find($id);

        return view('room.b2r303_edit')->with('editb2r303', $editb2r303);
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
        $updateb2r303 = B2R303::find($id);
        $input =$request->all();
        $updateb2r303->update($input);

        return redirect('b2r303');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B2R303::destroy($id);
        return redirect('b2r303');
    }
}
