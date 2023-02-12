<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OtherAnnouncement;

class OtherAnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $otherannouncement = OtherAnnouncement::all();
        return view('otherannouncement.index')->with('otherannouncement', $otherannouncement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $otherannouncements = OtherAnnouncement::all();
        return view('otherannouncement.index')->with('otherannouncements', $otherannouncements);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $otherannouncementinput = $request->all();
        OtherAnnouncement::create($otherannouncementinput);
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
        $singleOtherAnnouncement = OtherAnnouncement::find($id);
        return view('otherannouncement.otherannouncement_view')->with('singleOtherAnnouncement', $singleOtherAnnouncement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editOtherAnnouncement = OtherAnnouncement::find($id);
        return view('otherannouncement.otherannouncement_edit')->with('editOtherAnnouncement', $editOtherAnnouncement);
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
        $updateOtherAnnoucement = OtherAnnouncement::find($id);
        $input =$request->all();
        $updateOtherAnnoucement->update($input);

        return redirect('otherannouncement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OtherAnnouncement::destroy($id);
        return redirect('otherannouncement');
    }
}
