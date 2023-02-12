<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B1R203;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B1R203Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b1r203 = B1R203::all();
        return view('room.b1r203', compact('b1r203'));
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
        $b1r203subject = $request->input('subject_name_code');
        $b1r203professor = $request->input('subject_professor');
        $b1r203schedulefrom = $request->input('subject_schedulefrom');
        $b1r203scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B1R203;
        $dropdown->b1r203subject = $b1r203subject;
        $dropdown->b1r203professor = $b1r203professor;
        $dropdown->b1r203schedulefrom = $b1r203schedulefrom;
        $dropdown->b1r203scheduleto = $b1r203scheduleto;
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
        $singleb1r203 = B1R203::find($id);
        return view('room.b1r203_view')->with('singleb1r203', $singleb1r203);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb1r203 = B1R203::find($id);

        return view('room.b1r203_edit')->with('editb1r203', $editb1r203);
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
        $updateb1r203 = B1R203::find($id);
        $input =$request->all();
        $updateb1r203->update($input);

        return redirect('b1r203');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B1R203::destroy($id);
        return redirect('b1r203');
    }
}
