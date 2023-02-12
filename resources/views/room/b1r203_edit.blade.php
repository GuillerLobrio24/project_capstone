@extends('layouts.app')

@section('b1r203_edit')

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

                            <form action="/b1r203/{{$editb1r203->id}}" method="post">
                                {!! csrf_field() !!}
                                @method("PATCH")

                                <input type="hidden" class="form-control" name="id" value="{{$editb1r203->id}}">

                                <label><h4 class="room-edit-header4">Subject Name & Code</h4></label>
                                <input class="form-control room-input" type="text" name="subject" value="{{$editb1r203->subject}}">
                                
                                <label><h4 class="room-edit-header4">Proffesor Name</h4></label>
                                <input class="form-control room-input" type="text" name="professor" value="{{$editb1r203->professor}}">
    
                                <label><h4 class="room-edit-header4">From</h4></label>
                                <input class="form-control room-input" type="text" name="schedulefrom" value="{{$editb1r203->schedulefrom}}">
    
                                <label><h4 class="room-edit-header4">To</h4></label>
                                <input class="form-control room-input" type="text" name="scheduleto" value="{{$editb1r203->scheduleto}}">
    
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