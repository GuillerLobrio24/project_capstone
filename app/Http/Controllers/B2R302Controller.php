<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B2R302;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B2R302Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b2r302 = B2R302::all();
        return view('room.b2r302', compact('b2r302'));
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
        $b2r302subject = $request->input('subject_name_code');
        $b2r302professor = $request->input('subject_professor');
        $b2r302schedulefrom = $request->input('subject_schedulefrom');
        $b2r302scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B2R302;
        $dropdown->b2r302subject = $b2r302subject;
        $dropdown->b2r302professor = $b2r302professor;
        $dropdown->b2r302schedulefrom = $b2r302schedulefrom;
        $dropdown->b2r302scheduleto = $b2r302scheduleto;
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
        $singleb2r302 = B2R302::find($id);
        return view('room.b2r302_view')->with('singleb2r302', $singleb2r302);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb2r302 = B2R302::find($id);

        return view('room.b2r302_edit')->with('editb2r302', $editb2r302);
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
        $updateb2r302 = B2R302::find($id);
        $input =$request->all();
        $updateb2r302->update($input);

        return redirect('b2r302');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B2R302::destroy($id);
        return redirect('b2r302');
    }
}
