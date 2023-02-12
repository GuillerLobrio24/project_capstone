<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddSubject;
use App\Models\AddProfessor;

class UpdateController extends Controller
{
    public function index()
    {
        $updatesubject = AddSubject::all();
        $updateprofessor = AddProfessor::all();

        return view('room.b1r401_edit', compact('updatesubject','updateprofessor'));
    }
}
