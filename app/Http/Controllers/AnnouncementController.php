<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;


class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcement = Announcement::all();
        return view('announcement.index')->with('announcement', $announcement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $announcements = Announcement::all();
        return view('announcement.index')->with('announcements', $announcements);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $announcementinput = $request->all();
        Announcement::create($announcementinput);
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
        $singleAnnouncement = Announcement::find($id);
        return view('announcement.announcement_view')->with('singleAnnouncement', $singleAnnouncement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editAnnoucement = Announcement::find($id);
        return view('announcement.announcement_edit')->with('editAnnoucement', $editAnnoucement);
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
        $updateAnnoucement = Announcement::find($id);
        $input =$request->all();
        $updateAnnoucement->update($input);

        return redirect('announcement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Announcement::destroy($id);
        return redirect('announcement');
    }
}
