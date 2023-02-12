@extends('layouts.app')

@section('professor_add')

<div class="container table-container">

    <div class="row">

        <div class="col-md-2">
            <br>
        </div>

        <div class="col-md-8">

            <div class="form-group">

                <form action="/professor" method="post">
                    {!! csrf_field() !!}

                    <h2 class="other-header2">Add Professor</h2>

                    <label class="input-label"><p>Last Name</p></label>
                    <input type="text" class="form-control other-form" name="proflname" placeholder="Enter Last Name">
        
                    <label class="input-label"><p>First Code</p></label>
                    <input type="text" class="form-control other-form" name="proffname"  placeholder="Enter First Code">
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