<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B1R301;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B1R301Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b1r301 = B1R301::all();
        return view('room.b1r301', compact('b1r301'));
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
        $b1r301subject = $request->input('subject_name_code');
        $b1r301professor = $request->input('subject_professor');
        $b1r301schedulefrom = $request->input('subject_schedulefrom');
        $b1r301scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B1R301;
        $dropdown->b1r301subject = $b1r301subject;
        $dropdown->b1r301professor = $b1r301professor;
        $dropdown->b1r301schedulefrom = $b1r301schedulefrom;
        $dropdown->b1r301scheduleto = $b1r301scheduleto;
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
        $singleb1r301 = B1R301::find($id);
        return view('room.b1r301_view')->with('singleb1r301', $singleb1r301);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb1r301 = B1R301::find($id);

        return view('room.b1r301_edit')->with('editb1r301', $editb1r301);
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
        $updateb1r301 = B1R301::find($id);
        $input =$request->all();
        $updateb1r301->update($input);

        return redirect('b1r301');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B1R301::destroy($id);
        return redirect('b1r301');
    }
}
