<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B1R302;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B1R302Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b1r302 = B1R302::all();
        return view('room.b1r302', compact('b1r302'));
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
        $b1r302subject = $request->input('subject_name_code');
        $b1r302professor = $request->input('subject_professor');
        $b1r302schedulefrom = $request->input('subject_schedulefrom');
        $b1r302scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B1R302;
        $dropdown->b1r302subject = $b1r302subject;
        $dropdown->b1r302professor = $b1r302professor;
        $dropdown->b1r302schedulefrom = $b1r302schedulefrom;
        $dropdown->b1r302scheduleto = $b1r302scheduleto;
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
        $singleb1r302 = B1R302::find($id);
        return view('room.b1r302_view')->with('singleb1r302', $singleb1r302);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb1r302 = B1R302::find($id);

        return view('room.b1r302_edit')->with('editb1r302', $editb1r302);
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
        $updateb1r302 = B1R302::find($id);
        $input =$request->all();
        $updateb1r302->update($input);

        return redirect('b1r302');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B1R302::destroy($id);
        return redirect('b1r302');
    }
}
