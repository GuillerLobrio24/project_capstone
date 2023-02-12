@extends('layouts.app')

@section('announcement_view')
    <div>
        <div class="container room-container">
            <div class="row">
                <div class="col-3">
                    
                </div>
    
                <div class="col-6 room-information">
    
                    <div class="card">
    
                        <div class="card-header"><h1 class="room-header4">Announcement Information</h1></div>
    
                        <div class="card-body ">
                            <p><h4 class="room-view-header4">Announcement Title : {{ $singleAnnouncement->announcementtitle }}</h4></p>
                            <p><h4 class="room-view-header4">Announcement Content : {{ $singleAnnouncement->announcementcontent }}</h4></p>
                            
                            <a class="btn btn-primary room-view-btn" href="/announcement/{{ $singleAnnouncement->id }}/edit">Edit Information</a>
                            
                        </div>
    
                    </div>
    
                </div>
    
                <div class="col-3">
                    
                </div>
            </div>
        </div>

    </div>
        
@endsection