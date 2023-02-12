<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B1R303;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B1R303Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b1r303 = B1R303::all();
        return view('room.b1r303', compact('b1r303'));
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
        $b1r303subject = $request->input('subject_name_code');
        $b1r303professor = $request->input('subject_professor');
        $b1r303schedulefrom = $request->input('subject_schedulefrom');
        $b1r303scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B1R303;
        $dropdown->b1r303subject = $b1r303subject;
        $dropdown->b1r303professor = $b1r303professor;
        $dropdown->b1r303schedulefrom = $b1r303schedulefrom;
        $dropdown->b1r303scheduleto = $b1r303scheduleto;
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
        $singleb1r303 = B1R303::find($id);
        return view('room.b1r303_view')->with('singleb1r303', $singleb1r303);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb1r303 = B1R303::find($id);

        return view('room.b1r303_edit')->with('editb1r303', $editb1r303);
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
        $updateb1r303 = B1R303::find($id);
        $input =$request->all();
        $updateb1r303->update($input);

        return redirect('b1r303');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B1R303::destroy($id);
        return redirect('b1r303');
    }
}
