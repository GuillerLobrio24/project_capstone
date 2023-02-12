<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B2R301;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B2R301Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b2r301 = B2R301::all();
        return view('room.b2r301', compact('b2r301'));
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
        $b2r301subject = $request->input('subject_name_code');
        $b2r301professor = $request->input('subject_professor');
        $b2r301schedulefrom = $request->input('subject_schedulefrom');
        $b2r301scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B2R301;
        $dropdown->b2r301subject = $b2r301subject;
        $dropdown->b2r301professor = $b2r301professor;
        $dropdown->b2r301schedulefrom = $b2r301schedulefrom;
        $dropdown->b2r301scheduleto = $b2r301scheduleto;
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
        $singleb2r301 = B2R301::find($id);
        return view('room.b2r301_view')->with('singleb2r301', $singleb2r301);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb2r301 = B2R301::find($id);

        return view('room.b2r301_edit')->with('editb2r301', $editb2r301);
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
        $updateb2r301 = B2R301::find($id);
        $input =$request->all();
        $updateb2r301->update($input);

        return redirect('b2r301');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B2R301::destroy($id);
        return redirect('b2r301');
    }
}
