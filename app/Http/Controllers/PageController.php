<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Landing Page
    public function index(){
        return view('page.index');
    }
    
    // Login & Signup Page
    public function login(){
        return view('auth.login');
    }
    public function signup(){
        return view('auth.register');
    }

    // Admin Page
    public function admin()
    {
        return view('page.home');
    }
    public function announcement_publish()
    {
        return view('page.announcement_publish');
    }
    public function otherannouncement_publish()
    {
        return view('page.otherannouncement_publish');
    }

    //Subject Add
    public function subject_add()
    {
        return view('subjects.subject_add');
    }

    //Professor Add
    public function professor_add()
    {
        return view('professors.professor_add');
    }
}
