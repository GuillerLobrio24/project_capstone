<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B2R403;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B2R403Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b2r403 = B2R403::all();
        return view('room.b2r403', compact('b2r403'));
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
        $b2r403subject = $request->input('subject_name_code');
        $b2r403professor = $request->input('subject_professor');
        $b2r403schedulefrom = $request->input('subject_schedulefrom');
        $b2r403scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B2R403;
        $dropdown->b2r403subject = $b2r403subject;
        $dropdown->b2r403professor = $b2r403professor;
        $dropdown->b2r403schedulefrom = $b2r403schedulefrom;
        $dropdown->b2r403scheduleto = $b2r403scheduleto;
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
        $singleb2r403 = B2R403::find($id);
        return view('room.b2r403_view')->with('singleb2r403', $singleb2r403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb2r403 = B2R403::find($id);

        return view('room.b2r403_edit')->with('editb2r403', $editb2r403);
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
        $updateb2r403 = B2R403::find($id);
        $input =$request->all();
        $updateb2r403->update($input);

        return redirect('b2r403');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B2R403::destroy($id);
        return redirect('b2r403');
    }
}
