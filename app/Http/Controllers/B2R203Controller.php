<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B2R203;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B2R203Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b2r203 = B2R203::all();
        return view('room.b2r203', compact('b2r203'));
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
        $b2r203subject = $request->input('subject_name_code');
        $b2r203professor = $request->input('subject_professor');
        $b2r203schedulefrom = $request->input('subject_schedulefrom');
        $b2r203scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B2R203;
        $dropdown->b2r203subject = $b2r203subject;
        $dropdown->b2r203professor = $b2r203professor;
        $dropdown->b2r203schedulefrom = $b2r203schedulefrom;
        $dropdown->b2r203scheduleto = $b2r203scheduleto;
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
        $singleb2r203 = B2R203::find($id);
        return view('room.b2r203_view')->with('singleb2r203', $singleb2r203);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb2r203 = B2R203::find($id);

        return view('room.b2r203_edit')->with('editb2r203', $editb2r203);
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
        $updateb2r203 = B2R203::find($id);
        $input =$request->all();
        $updateb2r203->update($input);

        return redirect('b2r203');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B2R203::destroy($id);
        return redirect('b2r203');
    }
}
