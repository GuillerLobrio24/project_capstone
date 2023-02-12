<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class IndexRoomController extends Controller
{
    public function index()
    {
        $room = Room::all();
        return view('page.index')->with('room', $room);
    }
}
