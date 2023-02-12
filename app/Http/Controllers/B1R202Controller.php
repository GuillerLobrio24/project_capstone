<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B1R202;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class B1R202Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b1r202 = B1R202::all();
        return view('room.b1r202', compact('b1r202'));
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
        $b1r202subject = $request->input('subject_name_code');
        $b1r202professor = $request->input('subject_professor');
        $b1r202schedulefrom = $request->input('subject_schedulefrom');
        $b1r202scheduleto = $request->input('subject_scheduleto');

        // Store the selected value in the database
        $dropdown = new B1R202;
        $dropdown->b1r202subject = $b1r202subject;
        $dropdown->b1r202professor = $b1r202professor;
        $dropdown->b1r202schedulefrom = $b1r202schedulefrom;
        $dropdown->b1r202scheduleto = $b1r202scheduleto;
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
        $singleb1r202 = B1R202::find($id);
        return view('room.b1r202_view')->with('singleb1r202', $singleb1r202);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editb1r202 = B1R202::find($id);

        return view('room.b1r202_edit')->with('editb1r202', $editb1r202);
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
        $updateb1r202 = B1R202::find($id);
        $input =$request->all();
        $updateb1r202->update($input);

        return redirect('b1r202');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B1R202::destroy($id);
        return redirect('b1r202');
    }
}
