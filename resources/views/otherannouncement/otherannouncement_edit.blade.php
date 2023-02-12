@extends('layouts.app')

@section('otherannouncement_edit')

    <div class="container edit-container">
        <div class="row">

            <div class="col-3">
                <br>
            </div>

            <div class="col-6">
                <br><br>

                    <div class="card">

                        <div class="card-header">
                            <h1>Edit Information</h1>
                        </div>

                        <div class="card-body">

                            <form action="/otherannouncement/{{$editOtherAnnouncement->id}}" method="post">
                                {!! csrf_field() !!}
                                @method("PATCH")

                            <input type="hidden" class="form-control" name="id" value="{{$editOtherAnnouncement->id}}">

                            <label><h4 class="room-edit-header4">Announcement Title</h4></label>
                            <input class="form-control room-input" type="text" name="otherannouncementtitle" value="{{$editOtherAnnouncement->otherannouncementtitle}}">

                            <label><h4 class="room-edit-header4">Announcement Content</h4></label>
                            <input class="form-control room-input" type="text" name="otherannouncementcontent" value="{{$editOtherAnnouncement->otherannouncementcontent}}">

                            <h5><input type="submit" class="btn room-edit-btn btn-primary" value="Edit Information"></h5>

                            </form>
                            
                        </div>

                    </div>

            </div>

            <div class="col-3">
                <br>
            </div>

        </div>
    </div>


@endsection