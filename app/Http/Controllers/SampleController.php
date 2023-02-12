<?php

namespace App\Http\Controllers;
use App\Models\Sample;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function storeDropdownValue(Request $request) {
        $selectedValue = $request->input('selected_value');

        // Store the selected value in the database
        $dropdown = new Sample;
        $dropdown->value = $selectedValue;
        $dropdown->save();

        return redirect('/');
    }
    public function index()
    {
        $data = Sample::all();
        return view('room.sample', compact('data'));
    }
}
