<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B1R401;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B1R401Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b1r401 = B1R401::all();
        return view('room.b1r401', compact('b1r401'));
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
        $subject = $request->input('subject_name_code');
        $professor = $request->input('subject_professor');
        $schedulefrom = $request->input('subject_schedulefrom');
        $scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B1R401;
        $dropdown->subject = $subject;
        $dropdown->professor = $professor;
        $dropdown->schedulefrom = $schedulefrom;
        $dropdown->scheduleto = $scheduleto;
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
        $singleb1r401 = B1R401::find($id);
        return view('room.b1r401_view')->with('singleb1r401', $singleb1r401);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb1r401 = B1R401::find($id);

        return view('room.b1r401_edit')->with('editb1r401', $editb1r401);
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
        $updateb1r401 = B1R401::find($id);
        $input =$request->all();
        $updateb1r401->update($input);

        return redirect('b1r401');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B1R401::destroy($id);
        return redirect('b1r401');
    }
}
