@extends('layouts.app')

@section('announcement_publish')

<div class="container table-container">

    <div class="row">

        <div class="col-md-2">
            <br>
        </div>

        <div class="col-md-8">

            <div class="form-group">

                <form action="/announcement" method="post">
                    {!! csrf_field() !!}

                    <h2 class="other-header2">Announcements</h2>

                    <label class="input-label"><p>Announcement Title</p></label>
                    <input type="text" class="form-control other-form" name="announcementtitle" placeholder="Enter Announcement Title">
        
                    <label class="input-label"><p>Announcement Content</p></label>
                    <textarea rows="5" type="text" class="form-control other-form" name="announcementcontent"  placeholder="Enter Announcement Content">
                    </textarea>

                    <input class="btn clear-btn" type="reset" value="Clear">
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