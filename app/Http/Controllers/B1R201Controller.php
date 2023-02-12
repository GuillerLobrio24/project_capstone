<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B1R201;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B1R201Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b1r201 = B1R201::all();
        return view('room.b1r201', compact('b1r201'));
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
        $b1r201subject = $request->input('subject_name_code');
        $b1r201professor = $request->input('subject_professor');
        $b1r201schedulefrom = $request->input('subject_schedulefrom');
        $b1r201scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B1R201;
        $dropdown->b1r201subject = $b1r201subject;
        $dropdown->b1r201professor = $b1r201professor;
        $dropdown->b1r201schedulefrom = $b1r201schedulefrom;
        $dropdown->b1r201scheduleto = $b1r201scheduleto;
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
        $singleb1r201 = B1R201::find($id);
        return view('room.b1r201_view')->with('singleb1r201', $singleb1r201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb1r201 = B1R201::find($id);

        return view('room.b1r201_edit')->with('editb1r201', $editb1r201);
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
        $updateb1r201 = B1R201::find($id);
        $input =$request->all();
        $updateb1r201->update($input);

        return redirect('b1r201');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B1R201::destroy($id);
        return redirect('b1r201');
    }
}
