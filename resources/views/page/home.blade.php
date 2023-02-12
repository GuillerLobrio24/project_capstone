
@extends('layouts.app')

@section('admin')

<!-- Main Content -->

<div class="container main-container">

    <div class="card">

    <div class="card-header">

        <h4></h4>

    </div>

    <div class="card-body">

        <div class="container">

            <div class="row main-row">
    
            <div class="col-md-3">
    
                <div class="container calendar-container">
                    <h1></h1>
                </div>
    
                <div class="container tpi-container">
                
                <div id="carouselslide-tpi" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <h2 class="tpi-header2">Third-Party Information 1</h2>

                            <a type="button" href="/otherannouncement_publish" class="btn tpi-anchor-admin"><h6 class="tpi-anchor-admin-header6">Publish More Information</h6></a>

                        </div>

                    </div>

                </div>
                
                </div>

                <div id="tpiInformation" class="modal fade" role="dialog">

                <div class="modal-dialog">

                    <div class="modal-content">

                    <div class="modal-header">

                        <h2 class="modal-header2">Other Information</h2>

                    </div>

                    <div class="modal-body">

                        <label><h2>Header</h2></label>
                        <br>

                        <label><h5>Content</h5></label>
                        <br>

                    </div>

                    </div>

                </div>

                </div>
                
            </div>
    
            <div class="col-md-9">
    
                <div class="container date-container">
                
                <div class="datetime">

                    <div class="time"></div>
                    <div class="date"></div>
                    
                </div>

                </div>
    
                <div class="container content-container">

                <div id="carouselslide-content" class="carousel slide"">

                    <div class="carousel-inner">

                    <div class="carousel-item active">

                        <h1 class="content-header1">PUP Building 1</h1>
                        
                        <div class="row content">

                        <div class="col-md-3 room">

                            <button type="button" id="401" class="btn room-anchor" data-toggle="modal" data-target="#b1room401" value="Room 401"><h6 class="room-header6">Room 401</h6></button>

                        </div>

                        <div class="col-md-3 room">

                            <button type="button" id="402" class="btn room-anchor" data-toggle="modal" data-target="#b1room402" value="Room 402"><h6 class="room-header6">Room 402</h6></button>

                        </div>

                        <div class="col-md-3 room">

                            <button type="button" id="403" class="btn room-anchor" data-toggle="modal" data-target="#b1room403"  value="Room 403"><h6 class="room-header6">Room 403</h6></button>

                        </div>

                        <div class="col-md-3 room">

                            <button type="button" id="301" class="btn room-anchor" data-toggle="modal" data-target="#b1room301"><h6 class="room-header6">Room 301</h6></button>

                        </div>

                        <div class="col-md-3 room">

                            <button type="button" id="302" class="btn room-anchor" data-toggle="modal" data-target="#b1room302"><h6 class="room-header6">Room 302</h6></button>

                        </div>

                        <div class="col-md-3 room">

                            <button type="button" id="303" class="btn room-anchor" data-toggle="modal" data-target="#b1room303"><h6 class="room-header6">Room 303</h6></button>

                        </div>

                        <div class="col-md-3 room">

                            <button type="button" id="201" class="btn room-anchor" data-toggle="modal" data-target="#b1room201"><h6 class="room-header6">Room 201</h6></button>

                        </div>  

                        <div class="col-md-3 room">

                            <button type="button" id="202" class="btn room-anchor" data-toggle="modal" data-target="#b1room202"><h6 class="room-header6">Room 202</h6></button>

                        </div>

                        <div class="col-md-3 room">

                            <button type="button" id="203" class="btn room-anchor" data-toggle="modal" data-target="#b1room203"><h6 class="room-header6">Room 203</h6></button>

                        </div>

                        </div>

                    </div>

                    <div class="carousel-item">

                        <h1 class="content-header1">PUP Building 2</h1>

                        <div class="row content">

                        <div class="col-md-3 room">

                            <button type="button" id="401" class="btn room-anchor" data-toggle="modal" data-target="#b2room401"><h6 class="room-header6">Room 401</h6></button>

                        </div>

                        <div class="col-md-3 room">

                            <button type="button" id="402" class="btn room-anchor" data-toggle="modal" data-target="#b2room402"><h6 class="room-header6">Room 402</h6></button>

                        </div>

                        <div class="col-md-3 room">

                            <button type="button" id="403" class="btn room-anchor" data-toggle="modal" data-target="#b2room403"><h6 class="room-header6">Room 403</h6></button>

                        </div>

                        <div class="col-md-3 room">

                            <button type="button" id="301" class="btn room-anchor" data-toggle="modal" data-target="#b2room301"><h6 class="room-header6">Room 301</h6></button>

                        </div>

                        <div class="col-md-3 room">

                            <button type="button" id="302" class="btn room-anchor" data-toggle="modal" data-target="#b2room302"><h6 class="room-header6">Room 302</h6></button>

                        </div>

                        <div class="col-md-3 room">

                            <button type="button" id="303" class="btn room-anchor" data-toggle="modal" data-target="#b2room303"><h6 class="room-header6">Room 303</h6></button>

                        </div>

                        <div class="col-md-3 room">

                            <button type="button" id="201" class="btn room-anchor" data-toggle="modal" data-target="#b2room201"><h6 class="room-header6">Room 201</h6></button>

                        </div>  

                        <div class="col-md-3 room">

                            <button type="button" id="202" class="btn room-anchor" data-toggle="modal" data-target="#b2room202"><h6 class="room-header6">Room 202</h6></button>

                        </div>

                        <div class="col-md-3 room">

                            <button type="button" id="203" class="btn room-anchor" data-toggle="modal" data-target="#b2room203"><h6 class="room-header6">Room 203</h6></button>

                        </div>

                    </div>

                    </div>

                    </div>

                    <button class="carousel-control-prev content-prev" type="button" data-target="#carouselslide-content" data-slide="prev">

                    </button>

                    <button class="carousel-control-next content-next" type="button" data-target="#carouselslide-content" data-slide="next">

                    </button>

                </div>
                
                </div>
                
                <div id="b1room401" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 1 : Room 401</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b1r401" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>
    
                                    <br>
                                    <br>
    
                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p></p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b1room402" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 1 : Room 402</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b1r402" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>
    
                                    <br>
                                    <br>

                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b1room403" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 1 : Room 403</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b1r403" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>
    
                                    <br>
                                    <br>
    
                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b1room301" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 1 : Room 301</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b1r301" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>
    
                                    <br>
                                    <br>
    
                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b1room302" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 1 : Room 302</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b1r302" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>

                                    <br>
                                    <br>
    
                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b1room303" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 1 : Room 303</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b1r303" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>
    
                                    <br>
                                    <br>
    
                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b1room201" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 1 : Room 201</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b1r201" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>
    
                                    <br>
                                    <br>
    
                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b1room202" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 1 : Room 202</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b1r202" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>

                                    <br>
                                    <br>
    
                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>
                
                <div id="b1room203" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 1 : Room 203</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b1r203" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>

                                    <br>
                                    <br>
    
                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b2room401" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 2 : Room 401</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b2r401" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>

                                    <br>
                                    <br>
    
                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b2room402" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 2 : Room 402</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b2r402" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>

                                    <br>
                                    <br>
    
                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b2room403" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 2 : Room 403</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b2r403" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>

                                    <br>
                                    <br>
    
                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b2room301" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 2 : Room 301</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b2r301" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>

                                    <br>
                                    <br>
    
                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b2room302" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 2 : Room 302</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b2r302" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>

                                    <br>
                                    <br>
    
                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b2room303" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 2 : Room 303</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b2r303" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>

                                    <br>
                                    <br>
    
                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b2room201" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 2 : Room 201</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b2r201" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>
    
                                    <br>
                                    <br>

                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b2room202" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 2 : Room 202</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b2r202" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>
    
                                    <br>
                                    <br>

                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                <div id="b2room203" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Building 2 : Room 203</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/b2r203" method="post">
                                    {!! csrf_field() !!}
    
                                    <label class="input-label"><p>Select Subject Name & Code</p></label>
                                    
                                    <select class="form-control" name="subject_name_code">
                                        
                                        <option>-------------</option>

                                        @foreach ($subject as $itemsubject)
                                            <option value="{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}">{{ $itemsubject->subjectname }} - {{ $itemsubject->subjectcode }}</option>
                                        @endforeach

                                    </select>

                                    <br>

                                    <label class="input-label"><p>Select Professor</p></label>
                                    <select class="form-control" name="subject_professor">
                                        
                                        <option>-------------</option>

                                        @foreach ($professor as $itemprofessor)
                                            <option value="{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}">{{ $itemprofessor->proflname }}, {{ $itemprofessor->proffname }}</option>
                                        @endforeach

                                    </select>
    
                                    <br>

                                    <label class="input-label"><p>Schedule</p></label>

                                    <br>
    
                                    <select class="form-control dropdown-schedule" name="subject_schedulefrom" id="firstdropdown">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>
                                        
                                    </select>
                                    
                                    <select class="form-control dropdown-schedule" name="subject_scheduleto" id="seconddropdown" id="time-select">

                                        <option value="1">1:00 AM</option>
                                        <option value="2">2:00 AM</option>
                                        <option value="3">3:00 AM</option>
                                        <option value="4">4:00 AM</option>
                                        <option value="5">5:00 AM</option>
                                        <option value="6">6:00 AM</option>
                                        <option value="7">7:00 AM</option>  
                                        <option value="8">8:00 AM</option>
                                        <option value="9">9:00 AM</option>
                                        <option value="10">10:00 AM</option>
                                        <option value="11">11:00 AM</option>
                                        <option value="12">12:00 AM</option>

                                        <option value="13">1:00 PM</option>
                                        <option value="14">2:00 PM</option>
                                        <option value="15">3:00 PM</option>
                                        <option value="16">4:00 PM</option>
                                        <option value="17">5:00 PM</option>
                                        <option value="18">6:00 PM</option>
                                        <option value="19">7:00 PM</option>
                                        <option value="20">8:00 PM</option>
                                        <option value="21">9:00 PM</option>
                                        <option value="22">10:00 PM</option>  
                                        <option value="23">11:00 PM</option>
                                        <option value="24">12:00 PM</option>

                                    </select>
    
                                    <br>
                                    <br>

                                    <input id="B1401" type="submit" name="submit" class="btn submit-btn button-click">
    
                                </form>
    
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                {{--  --}}

                <div id="sample" id="roomModal" class="modal 
                fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 
    
                        <div class="modal-header">
    
                            <h2  class="modal-header2">Sample</h2>
    
                        </div>
    
                        <div class="modal-body">
    
                            <div id="roomForm" class="form-group">
    
                                <form action="/sample" method="post">
                                    {!! csrf_field() !!}
    
                                    <select name="selected_value">
                                        <option value="value1">Value 1</option>
                                        <option value="value2">Value 2</option>
                                        <option value="value3">Value 3</option>
                                    </select>

                                    <input type="submit" name="submit" class="btn submit-btn">
    
                                </form>
                                
                            </div>
    
                        </div>
    
                        <div class="modal-footer">
    
                            <p>Status</p>
    
                        </div>
    
                        </div>
    
                    </div>
    
                </div>

                {{--  --}}

                <div class="container announcement-container">
                
                <div id="carouselslide-announcement" class="carousel slide" data-ride="carousel ">

                    <div class="carousel-inner">

                    <div class="carousel-item active">

                        <h2 class="announcement-header2">Announcement</h2>

                        <a type="button" href="announcement_publish" class="btn announcement-anchor-admin"><h6 class="announcement-anchor-admin-header6">Publish Announcement</h6></a>

                    </div>

                    </div>

                </div> 
                
                </div>

                <div id="announcementInformation" class="modal fade" role="dialog">

                <div class="modal-dialog">

                    <div class="modal-content">

                    <div class="modal-header">

                        <h2 class="modal-header2">Announcement Information</h2>

                    </div>

                    <div class="modal-body">

                        <label><h2>Header</h2></label>
                        <br>

                        <label><h5>Content</h5></label>

                    </div>

                    <div class="modal-footer">

                        <p>Polytechnic University Philippines</p>

                    </div>

                    </div>

                </div>
                
                </div>
                
            </div>
            
            </div>

        </div>

    </div>

    </div>  

</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection

