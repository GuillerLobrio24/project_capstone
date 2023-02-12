<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B2R402;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B2R402Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b2r402 = B2R402::all();
        return view('room.b2r402', compact('b2r402'));
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
        $b2r402subject = $request->input('subject_name_code');
        $b2r402professor = $request->input('subject_professor');
        $b2r402schedulefrom = $request->input('subject_schedulefrom');
        $b2r402scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B2R402;
        $dropdown->b2r402subject = $b2r402subject;
        $dropdown->b2r402professor = $b2r402professor;
        $dropdown->b2r402schedulefrom = $b2r402schedulefrom;
        $dropdown->b2r402scheduleto = $b2r402scheduleto;
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
        $singleb2r402 = B2R402::find($id);
        return view('room.b2r402_view')->with('singleb2r402', $singleb2r402);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb2r402 = B2R402::find($id);

        return view('room.b2r402_edit')->with('editb2r402', $editb2r402);
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
        $updateb2r402 = B2R402::find($id);
        $input =$request->all();
        $updateb2r402->update($input);

        return redirect('b2r402');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B2R402::destroy($id);
        return redirect('b2r402');
    }
}
