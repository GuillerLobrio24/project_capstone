@extends('layouts.app')

@section('b1r402_edit')

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

                            <form action="/b1r402/{{$editb1r402->id}}" method="post">
                                {!! csrf_field() !!}
                                @method("PATCH")

                            <input type="hidden" class="form-control" name="id" value="{{$editb1r402->id}}">

                            <label><h4 class="room-edit-header4">Subject Name & Code</h4></label>
                            <input class="form-control room-input" type="text" name="subject" value="{{$editb1r402->b1r402subject}}">
                            
                            <label><h4 class="room-edit-header4">Proffesor Name</h4></label>
                            <input class="form-control room-input" type="text" name="professor" value="{{$editb1r402->b1r402professor}}">

                            <label><h4 class="room-edit-header4">From</h4></label>
                            <input class="form-control room-input" type="text" name="schedulefrom" value="{{$editb1r402->b1r402schedulefrom}}">

                            <label><h4 class="room-edit-header4">To</h4></label>
                            <input class="form-control room-input" type="text" name="scheduleto" value="{{$editb1r402->b1r402scheduleto}}">

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