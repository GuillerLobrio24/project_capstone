@extends('layouts.app')

@section('subject_add')

<div class="container table-container">

    <div class="row">

        <div class="col-md-2">
            <br>
        </div>

        <div class="col-md-8">

            <div class="form-group">

                <form action="/subject" method="post">
                    {!! csrf_field() !!}

                    <h2 class="other-header2">Add Subject</h2>

                    <label class="input-label"><p>Subject Name</p></label>
                    <input type="text" class="form-control other-form" name="subjectname" placeholder="Enter Subject Name">
        
                    <label class="input-label"><p>Subject Code</p></label>
                    <input type="text" class="form-control other-form" name="subjectcode"  placeholder="Enter Subject Code">
                    </input>

                    <input type="submit" name="submit" class="btn submit-btn">

                </form>

            </div>
            
        </div>

        <div class="col-md-2">
            <br>
        </div>

    </div>

</div>
    
@endsection