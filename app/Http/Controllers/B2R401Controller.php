<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B2R401;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B2R401Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b2r401 = B2R401::all();
        return view('room.b2r401', compact('b2r401'));
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
        $b2r401subject = $request->input('subject_name_code');
        $b2r401professor = $request->input('subject_professor');
        $b2r401schedulefrom = $request->input('subject_schedulefrom');
        $b2r401scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B2R401;
        $dropdown->b2r401subject = $b2r401subject;
        $dropdown->b2r401professor = $b2r401professor;
        $dropdown->b2r401schedulefrom = $b2r401schedulefrom;
        $dropdown->b2r401scheduleto = $b2r401scheduleto;
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
        $singleb2r401 = B2R401::find($id);
        return view('room.b2r401_view')->with('singleb2r401', $singleb2r401);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb2r401 = B2R401::find($id);

        return view('room.b2r401_edit')->with('editb2r401', $editb2r401);
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
        $updateb2r401 = B2R401::find($id);
        $input =$request->all();
        $updateb2r401->update($input);

        return redirect('b2r401');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B2R401::destroy($id);
        return redirect('b2r401');
    }
}
