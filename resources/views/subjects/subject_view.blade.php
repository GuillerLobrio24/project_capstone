@extends('layouts.app')

@section('subject_view')
    <div>
        <div class="container room-container">
            <div class="row">
                <div class="col-3">
                    
                </div>
    
                <div class="col-6 room-information">
    
                    <div class="card">
    
                        <div class="card-header"><h1 class="room-header4">Subject Information</h1></div>
    
                        <div class="card-body ">
                            <p><h4 class="room-view-header4">Subject Name : {{ $singlesubject->subjectname }}</h4></p>
                            <p><h4 class="room-view-header4">Subject Code : {{ $singlesubject->subjectcode }}</h4></p>
                            
                            <a class="btn btn-primary room-view-btn" href="/subject/{{ $singlesubject->id }}/edit">Edit Information</a>
                            
                        </div>
    
                    </div>
    
                </div>
    
                <div class="col-3">
                    
                </div>
            </div>
        </div>

    </div>
        
@endsection