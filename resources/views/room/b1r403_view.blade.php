@extends('layouts.app')

@section('b1r403_view')
    <div>
        <div class="container room-container">
            <div class="row">
                <div class="col-3">
                    
                </div>
    
                <div class="col-6 room-information">
    
                    <div class="card">
    
                        <div class="card-header"><h1 class="room-header4">Room Information</h1></div>
    
                        <div class="card-body ">
                            <p><h4 class="room-view-header4">Subject Name & Code : {{ $singleb1r403->b1r403subject }}</h4></p>
                            <p><h4 class="room-view-header4">Proffesor Name : {{ $singleb1r403->b1r403professor }}</h4></p>
                            <p><h4 class="room-view-header4">Schedule : {{ $singleb1r403->b1r403schedulefrom }} - {{ $singleb1r403->b1r403scheduleto }}</h4></p>
                            
                            <a class="btn btn-primary room-view-btn" href="/b1r403/{{ $singleb1r403->id }}/edit">Edit Information</a>
                            
                        </div>
    
                    </div>
    
                </div>
    
                <div class="col-3">
                    
                </div>
            </div>
        </div>

    </div>
        
@endsection