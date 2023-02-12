@extends('layouts.app')

@section('announcement_edit')

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

                            <form action="/announcement/{{$editAnnoucement->id}}" method="post">
                                {!! csrf_field() !!}
                                @method("PATCH")

                            <input type="hidden" class="form-control" name="id" value="{{$editAnnoucement->id}}">

                            <label><h4 class="room-edit-header4">Announcement Title</h4></label>
                            <input class="form-control room-input" type="text" name="announcementtitle" value="{{$editAnnoucement->announcementtitle}}">

                            <label><h4 class="room-edit-header4">Announcement Content</h4></label>
                            <input class="form-control room-input" type="text" name="announcementcontent" value="{{$editAnnoucement->announcementcontent}}">

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