<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddProfessor;

class AddProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addprofessor = AddProfessor::all();
        return view('professors.index', compact('addprofessor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addprofessors = AddProfessor::all();
        return view('professors.professor_add')->with('addprofessors', $addprofessors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professortinput = $request->all();
        AddProfessor::create($professortinput);
        return redirect('professor_add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleprofessor = AddProfessor::find($id);
        return view('professors.professor_view')->with('singleprofessor', $singleprofessor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editprofessor = AddProfessor::find($id);
        return view('professors.professor_edit')->with('editprofessor', $editprofessor);
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
        $updateprofessor = AddProfessor::find($id);
        $input =$request->all();
        $updateprofessor->update($input);

        return redirect('professor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddProfessor::destroy($id);
        return redirect('professor');
    }
}
