<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B2R202;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B2R202Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b2r202 = B2R202::all();
        return view('room.b2r202', compact('b2r202'));
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
        $b2r202subject = $request->input('subject_name_code');
        $b2r202professor = $request->input('subject_professor');
        $b2r202schedulefrom = $request->input('subject_schedulefrom');
        $b2r202scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B2R202;
        $dropdown->b2r202subject = $b2r202subject;
        $dropdown->b2r202professor = $b2r202professor;
        $dropdown->b2r202schedulefrom = $b2r202schedulefrom;
        $dropdown->b2r202scheduleto = $b2r202scheduleto;
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
        $singleb2r202 = B2R202::find($id);
        return view('room.b2r202_view')->with('singleb2r202', $singleb2r202);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb2r202 = B2R202::find($id);

        return view('room.b2r202_edit')->with('editb2r202', $editb2r202);
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
        $updateb2r202 = B2R202::find($id);
        $input =$request->all();
        $updateb2r202->update($input);

        return redirect('b2r202');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B2R202::destroy($id);
        return redirect('b2r202');
    }
}
