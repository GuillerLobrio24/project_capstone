@extends('layouts.app')

@section('otherannouncement_publish')

<div class="container table-container">

    <div class="row">

        <div class="col-md-2">
            <br>
        </div>

        <div class="col-md-8">

            <div class="form-group">

                <form action="/otherannouncement" method="post">
                    {!! csrf_field() !!}

                    <h2 class="other-header2">Other Announcements</h2>

                    <label class="input-label"><p>Other Announcement Title</p></label>
                    <input type="text" class="form-control other-form" name="otherannouncementtitle" placeholder="Enter Other Announcement Title">
        
                    <label class="input-label"><p>Other Announcement Content</p></label>
                    <textarea rows="5" class="form-control other-form" name="otherannouncementcontent" placeholder="Enter Other Announcement Title">
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