<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddSubject;

class AddSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addsubject = AddSubject::all();
        return view('subjects.index', compact('addsubject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addsubjects = AddSubject::all();
        return view('subjects.subject_add')->with('addsubjects', $addsubjects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subjectinput = $request->all();
        AddSubject::create($subjectinput);
        return redirect('subject_add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singlesubject = AddSubject::find($id);
        return view('subjects.subject_view')->with('singlesubject', $singlesubject);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editsubject = AddSubject::find($id);
        return view('subjects.subject_edit')->with('editsubject', $editsubject);
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
        $updatesubject = AddSubject::find($id);
        $input =$request->all();
        $updatesubject->update($input);

        return redirect('subject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddSubject::destroy($id);
        return redirect('subject');
    }
}
