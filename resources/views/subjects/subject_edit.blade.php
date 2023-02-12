@extends('layouts.app')

@section('subject_edit')

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

                            <form action="/subject/{{$editsubject->id}}" method="post">
                                {!! csrf_field() !!}
                                @method("PATCH")

                            <input type="hidden" class="form-control" name="id" value="{{$editsubject->id}}">

                            <label><h4 class="room-edit-header4">Subject Name</h4></label>
                            <input class="form-control room-input" type="text" name="subjectname" value="{{$editsubject->subjectname}}">

                            <label><h4 class="room-edit-header4">Subject Code</h4></label>
                            <input class="form-control room-input" type="text" name="subjectcode" value="{{$editsubject->subjectcode}}">


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