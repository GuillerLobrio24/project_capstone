<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddSubject;
use App\Models\AddProfessor;


class InputController extends Controller
{
    public function index()
    {
        $subject = AddSubject::all();

        $professor = AddProfessor::all();

        return view('page.home', compact('subject','professor'));
    }
}
