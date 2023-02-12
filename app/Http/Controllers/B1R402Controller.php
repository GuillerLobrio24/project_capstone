<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B1R402;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B1R402Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b1r402 = B1R402::all();
        return view('room.b1r402', compact('b1r402'));
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
        $b1r402subject = $request->input('subject_name_code');
        $b1r402professor = $request->input('subject_professor');
        $b1r402schedulefrom = $request->input('subject_schedulefrom');
        $b1r402scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B1R402;
        $dropdown->b1r402subject = $b1r402subject;
        $dropdown->b1r402professor = $b1r402professor;
        $dropdown->b1r402schedulefrom = $b1r402schedulefrom;
        $dropdown->b1r402scheduleto = $b1r402scheduleto;
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
        $singleb1r402 = B1R402::find($id);
        return view('room.b1r402_view')->with('singleb1r402', $singleb1r402);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb1r402 = B1R402::find($id);

        return view('room.b1r402_edit')->with('editb1r402', $editb1r402);
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
        $updateb1r402 = B1R402::find($id);
        $input =$request->all();
        $updateb1r402->update($input);

        return redirect('b1r402');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B1R402::destroy($id);
        return redirect('b1r402');
    }
}
