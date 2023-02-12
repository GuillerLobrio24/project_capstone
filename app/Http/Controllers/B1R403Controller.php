<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B1R403;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B1R403Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b1r403 = B1R403::all();
        return view('room.b1r403', compact('b1r403'));
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
        $b1r403subject = $request->input('subject_name_code');
        $b1r403professor = $request->input('subject_professor');
        $b1r403schedulefrom = $request->input('subject_schedulefrom');
        $b1r403scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B1R403;
        $dropdown->b1r403subject = $b1r403subject;
        $dropdown->b1r403professor = $b1r403professor;
        $dropdown->b1r403schedulefrom = $b1r403schedulefrom;
        $dropdown->b1r403scheduleto = $b1r403scheduleto;
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
        $singleb1r403 = B1R403::find($id);
        return view('room.b1r403_view')->with('singleb1r403', $singleb1r403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb1r403 = B1R403::find($id);

        return view('room.b1r403_edit')->with('editb1r403', $editb1r403);
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
        $updateb1r403 = B1R403::find($id);
        $input =$request->all();
        $updateb1r403->update($input);

        return redirect('b1r403');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B1R403::destroy($id);
        return redirect('b1r403');
    }
}
