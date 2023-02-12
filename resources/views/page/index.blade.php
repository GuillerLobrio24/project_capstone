@extends('layout.layout_one')

@section('index')

<!-- Main Content -->

    <div class="container main-container">

        <div class="card">

        <div class="card-header">

            <h4></h4>

        </div>

        <div class="card-body">

            <div class="container">

                <div class="row main-row">
        
                <div class="col-md-3">
        
                    <div class="container calendar-container">
                        <h1></h1>
                    </div>
        
                    <div class="container tpi-container">
                    
                    <div id="carouselslide-tpi" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                        <li class="carousel-indicators-list" data-target="#carouselslide-tpi" data-slide-to="0" class="active"></li>
                        <li class="carousel-indicators-list" data-target="#carouselslide-tpi" data-slide-to="1"></li>
                        <li class="carousel-indicators-list" data-target="#carouselslide-tpi" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">

                        <div class="carousel-item active">

                            <h2 class="tpi-header2">Third-Party Information 1</h2>

                            <a type="button" class="tpi-anchor" data-toggle="modal" data-target="#tpiInformation"><h6 class="announcement-header6">Click for More Information!</h6></a>

                        </div>

                        <div class="carousel-item">

                            <h2 class="tpi-header2">Third-Party Information 2</h2>

                            <a type="button" class="tpi-anchor" data-toggle="modal" data-target="#tpiInformation"><h6 class="announcement-header6">Click for More Information!</h6></a>

                        </div>

                        <div class="carousel-item">

                            <h2 class="tpi-header2">Third-Party Information 3</h2>

                            <a type="button" class="tpi-anchor" data-toggle="modal" data-target="#tpiInformation"><h6 class="announcement-header6">Click for More Information!</h6></a>

                        </div>

                        </div>

                    </div>
                    
                    </div>

                    <div id="tpiInformation" class="modal fade" role="dialog">

                    <div class="modal-dialog">

                        <div class="modal-content">

                        <div class="modal-header">

                            <h2 class="modal-header2">Other Information</h2>

                        </div>

                        <div class="modal-body">

                            <label><h2>Header</h2></label>
                            <br>

                            <label><h5>Content</h5></label>
                            <br>

                        </div>

                        </div>

                    </div>

                    </div>
                    
                </div>
        
                <div class="col-md-9">
        
                    <div class="container date-container">
                    
                    <div class="datetime">

                        <div class="time"></div>
                        <div class="date"></div>
                        
                    </div>

                    </div>
        
                    <div class="container content-container">

                    <div id="carouselslide-content" class="carousel slide">

                        <div class="carousel-inner">

                        <div class="carousel-item content-carousel-item active">

                            <h1 class="content-header1">PUP Building 1</h1>
                            
                            <div class="row content">

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b1r401"><h6 class="room-header6">Room 401</h6></button>

                            </div>
                    
                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b1r402"><h6 class="room-header6">Room 402</h6></button>

                            </div>

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b1r403"><h6 class="room-header6">Room 403</h6></button>

                            </div>

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b1r301"><h6 class="room-header6">Room 301</h6></button>

                            </div>

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b1r302"><h6 class="room-header6">Room 302</h6></button>

                            </div>

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b1r303"><h6 class="room-header6">Room 303</h6></button>

                            </div>
                            
                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b1r201"><h6 class="room-header6">Room 201</h6></button>

                            </div>  

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b1r202"><h6 class="room-header6">Room 202</h6></button>

                            </div>

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b1r203"><h6 class="room-header6">Room 203</h6></button>

                            </div>

                            </div>

                        </div>

                        <div class="carousel-item content-carousel-item">

                            <h1 class="content-header1">PUP Building 2</h1>

                            <div class="row content">

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b2r401"><h6 class="room-header6">Room 401</h6></button>

                            </div>

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b2r402"><h6 class="room-header6">Room 402</h6></button>

                            </div>

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b2r403"><h6 class="room-header6">Room 403</h6></button>

                            </div>

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b2r301"><h6 class="room-header6">Room 301</h6></button>

                            </div>

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b2r302"><h6 class="room-header6">Room 302</h6></button>

                            </div>

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b2r303"><h6 class="room-header6">Room 303</h6></button>

                            </div>

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b2r201"><h6 class="room-header6">Room 201</h6></button>

                            </div>  

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b2r202"><h6 class="room-header6">Room 202</h6></button>

                            </div>

                            <div class="col-md-3 room">

                                <button type="button" class="btn room-anchor" data-toggle="modal" data-target="#b2r203"><h6 class="room-header6">Room 203</h6></button>

                            </div>

                            </div>

                        </div>

                        </div>

                        <button class="carousel-control-prev content-prev" type="button" data-target="#carouselslide-content" data-slide="prev">

                        <!-- <span class="carousel-control-prev-icon bg-dark"></span> -->

                        </button>

                        <button class="carousel-control-next content-next" type="button" data-target="#carouselslide-content" data-slide="next">

                        <!-- <span class="carousel-control-next-icon bg-dark"></span> -->

                        </button>

                    </div>
                    
                    </div>
                    
                    <div id="b1r401" class="modal fade" role="dialog">

                    <div class="modal-dialog">
                        
                        <div class="modal-content"> 

                        <div class="modal-header">

                            <!-- <button type="button" class="close" data-bs-dismiss="modal">&times;</button> -->

                            <h2 class="modal-header2">B1 Room 401</h2>
                            <h2 hidden="true" class="modal-header2 currenttime"></h2>

                        </div>

                        @foreach ($b1r401 as $roomb1r401)

                        <div class="modal-body">

                            <label><h2>Subject Name : {{$roomb1r401->subject}}</h2></label>
                            <br>

                            <label><h3>Professor Name : {{$roomb1r401->professor}}</h3></label>
                            <br>

                            <label><h5>Schedule : {{$roomb1r401->schedulefrom}} -  {{$roomb1r401->scheduleto}}</h5></label>
                            <br>

                        </div>
                        
                        @endforeach

                            
                            <script>
                                function subtractTime(hour, minute) {
                                let b1r401schedfrom = <?php echo json_encode($b1r401schedfrom); ?>;
                                let b1r401schedto = <?php echo json_encode($b1r401schedto); ?>;

                                for (let x = 0; x < b1r401schedfrom.length; x++) {
                                    for (let y = 0; y < b1r401schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b1r401schedfrom[x].schedulefrom) * 60;
                                        const sto = (b1r401schedto[x].scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B1 Room 401 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b1r401col) {
                                    let b1r401column = <?php echo json_encode($b1r401col); ?>;
                                
                                    for(let a = 0; a<b1r401column.length; a++){
                                        deleteData(b1r401column[a].id,b1r401column[a].subject,b1r401column[a].professor,b1r401column[a].schedulefrom,b1r401column[a].scheduleto,b1r401column[a].created_at,b1r401column[a].updated_at);
                                
                                        b1r401column.splice(a, 1);
                                        a--;
                                
                                        console.log(b1r401column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b1r401/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const current = new Date();
                                setTimeout(tableDeletion, subtractTime(current.getHours(), current.getMinutes()));
                            </script>

                        <div class="modal-footer">

                            <p>Status</p>

                        </div>

                        </div>

                    </div>

                    </div>

                    {{--  --}}

                    <div id="b1r402" class="modal fade" role="dialog">

                        <div class="modal-dialog">
                            
                            <div class="modal-content"> 
    
                            <div class="modal-header">
    
                                <h2  class="modal-header2">B1 Room 402</h2>
    
                            </div>
    
                            @foreach ($b1r402 as $roomb1r402)
    
                            <div class="modal-body">

                                <label><h2>Subject Name : {{$roomb1r402->b1r402subject}}</h2></label>
                                <br>
    
                                <label><h3>Professor Name : {{$roomb1r402->b1r402professor}}</h3></label>
                                <br>
    
                                <label><h5>Schedule : {{$roomb1r402->b1r402schedulefrom}} -  {{$roomb1r402->b1r402scheduleto}}</h5></label>
                                <br>
    
                            </div>
                            
                            @endforeach

                            <script>
                                function subtractTime(hour, minute) {
                                let b1r402schedfrom = <?php echo json_encode($b1r402schedfrom); ?>;
                                let b1r402schedto = <?php echo json_encode($b1r402schedto); ?>;

                                for (let x = 0; x < b1r402schedfrom.length; x++) {
                                    for (let y = 0; y < b1r402schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b1r402schedfrom[x].b1r402schedulefrom) * 60;
                                        const sto = (b1r402schedto[x].b1r402scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B1 Room 402 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b1r402col) {
                                    let b1r402column = <?php echo json_encode($b1r402col); ?>;
                                
                                    for(let a = 0; a<b1r402column.length; a++){
                                        deleteData(b1r402column[a].id,b1r402column[a].subject,b1r402column[a].professor,b1r402column[a].schedulefrom,b1r402column[a].scheduleto,b1r402column[a].created_at,b1r402column[a].updated_at);
                                
                                        b1r402column.splice(a, 1);
                                        a--;
                                
                                        console.log(b1r402column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b1r402/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b1r402current = new Date();
                                setTimeout(tableDeletion, subtractTime(b1r402current.getHours(), b1r402current.getMinutes()));
                            </script>
    
                            <div class="modal-footer">
    
                                <p>Status</p>
    
                            </div>
    
                            </div>
    
                        </div>
    
                    </div>

                    {{--  --}}

                    <div id="b1r403" class="modal fade" role="dialog">

                        <div class="modal-dialog">
                            
                            <div class="modal-content"> 
    
                            <div class="modal-header">
    
                                <h2  class="modal-header2">B1 Room 403</h2>
    
                            </div>
    
                            @foreach ($b1r403 as $roomb1r403)
    
                            <div class="modal-body">

                                <label><h2>Subject Name : {{$roomb1r403->b1r403subject}}</h2></label>
                                <br>
    
                                <label><h3>Professor Name : {{$roomb1r403->b1r403professor}}</h3></label>
                                <br>
    
                                <label><h5>Schedule : {{$roomb1r403->b1r403schedulefrom}} -  {{$roomb1r403->b1r403scheduleto}}</h5></label>
                                <br>
    
                            </div>
                            
                            @endforeach

                            <script>
                                function subtractTime(hour, minute) {
                                let b1r403schedfrom = <?php echo json_encode($b1r403schedfrom); ?>;
                                let b1r403schedto = <?php echo json_encode($b1r403schedto); ?>;

                                for (let x = 0; x < b1r403schedfrom.length; x++) {
                                    for (let y = 0; y < b1r403schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b1r403schedfrom[x].b1r403schedulefrom) * 60;
                                        const sto = (b1r403schedto[x].b1r403scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B1 Room 403 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b1r403col) {
                                    let b1r403column = <?php echo json_encode($b1r403col); ?>;
                                
                                    for(let a = 0; a<b1r403column.length; a++){
                                        deleteData(b1r403column[a].id,b1r403column[a].subject,b1r403column[a].professor,b1r403column[a].schedulefrom,b1r403column[a].scheduleto,b1r403column[a].created_at,b1r403column[a].updated_at);
                                
                                        b1r403column.splice(a, 1);
                                        a--;
                                
                                        console.log(b1r403column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b1r403/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b1r403current = new Date();
                                setTimeout(tableDeletion, subtractTime(b1r403current.getHours(), b1r403current.getMinutes()));
                            </script>
    
                            <div class="modal-footer">
    
                                <p>Status</p>
    
                            </div>
    
                            </div>
    
                        </div>
    
                    </div>

                    {{--  --}}

                    <div id="b1r301" class="modal fade" role="dialog">

                        <div class="modal-dialog">
                            
                            <div class="modal-content"> 
    
                            <div class="modal-header">
    
                                <h2  class="modal-header2">B1 Room 301</h2>
    
                            </div>
    
                            @foreach ($b1r301 as $roomb1r301)
    
                            <div class="modal-body">

                                <label><h2>Subject Name : {{$roomb1r301->b1r301subject}}</h2></label>
                                <br>
    
                                <label><h3>Professor Name : {{$roomb1r301->b1r301professor}}</h3></label>
                                <br>
    
                                <label><h5>Schedule : {{$roomb1r301->b1r301schedulefrom}} -  {{$roomb1r301->b1r301scheduleto}}</h5></label>
                                <br>
    
                            </div>
                            
                            @endforeach

                            <script>
                                function subtractTime(hour, minute) {
                                let b1r301schedfrom = <?php echo json_encode($b1r301schedfrom); ?>;
                                let b1r301schedto = <?php echo json_encode($b1r301schedto); ?>;

                                for (let x = 0; x < b1r301schedfrom.length; x++) {
                                    for (let y = 0; y < b1r301schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b1r301schedfrom[x].b1r301schedulefrom) * 60;
                                        const sto = (b1r301schedto[x].b1r301scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B1 Room 301 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b1r301col) {
                                    let b1r301column = <?php echo json_encode($b1r301col); ?>;
                                
                                    for(let a = 0; a<b1r301column.length; a++){
                                        deleteData(b1r301column[a].id,b1r301column[a].subject,b1r301column[a].professor,b1r301column[a].schedulefrom,b1r301column[a].scheduleto,b1r301column[a].created_at,b1r301column[a].updated_at);
                                
                                        b1r301column.splice(a, 1);
                                        a--;
                                
                                        console.log(b1r301column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b1r301/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b1r301current = new Date();
                                setTimeout(tableDeletion, subtractTime(b1r301current.getHours(), b1r301current.getMinutes()));
                            </script>
    
                            <div class="modal-footer">
    
                                <p>Status</p>
    
                            </div>
    
                            </div>
    
                        </div>
    
                    </div>

                    {{--  --}}

                    <div id="b1r302" class="modal fade" role="dialog">

                        <div class="modal-dialog">
                            
                            <div class="modal-content"> 
    
                            <div class="modal-header">
    
                                <h2  class="modal-header2">B1 Room 302</h2>
    
                            </div>
    
                            @foreach ($b1r302 as $roomb1r302)
    
                            <div class="modal-body">

                                <label><h2>Subject Name : {{$roomb1r302->b1r302subject}}</h2></label>
                                <br>
    
                                <label><h3>Professor Name : {{$roomb1r302->b1r302professor}}</h3></label>
                                <br>
    
                                <label><h5>Schedule : {{$roomb1r302->b1r302schedulefrom}} -  {{$roomb1r302->b1r302scheduleto}}</h5></label>
                                <br>
    
                            </div>
                            
                            @endforeach

                            <script>
                                function subtractTime(hour, minute) {
                                let b1r302schedfrom = <?php echo json_encode($b1r302schedfrom); ?>;
                                let b1r302schedto = <?php echo json_encode($b1r302schedto); ?>;

                                for (let x = 0; x < b1r302schedfrom.length; x++) {
                                    for (let y = 0; y < b1r302schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b1r302schedfrom[x].b1r302schedulefrom) * 60;
                                        const sto = (b1r302schedto[x].b1r302scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B1 Room 302 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b1r302col) {
                                    let b1r302column = <?php echo json_encode($b1r302col); ?>;
                                
                                    for(let a = 0; a<b1r302column.length; a++){
                                        deleteData(b1r302column[a].id,b1r302column[a].subject,b1r302column[a].professor,b1r302column[a].schedulefrom,b1r302column[a].scheduleto,b1r302column[a].created_at,b1r302column[a].updated_at);
                                
                                        b1r302column.splice(a, 1);
                                        a--;
                                
                                        console.log(b1r302column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b1r302/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b1r302current = new Date();
                                setTimeout(tableDeletion, subtractTime(b1r302current.getHours(), b1r302current.getMinutes()));
                            </script>
    
                            <div class="modal-footer">
    
                                <p>Status</p>
    
                            </div>
    
                            </div>
    
                        </div>
    
                    </div>

                    {{--  --}}

                    <div id="b1r303" class="modal fade" role="dialog">

                        <div class="modal-dialog">
                            
                            <div class="modal-content"> 
    
                            <div class="modal-header">
    
                                <h2  class="modal-header2">B1 Room 303</h2>
    
                            </div>
    
                            @foreach ($b1r303 as $roomb1r303)
    
                            <div class="modal-body">

                                <label><h2>Subject Name : {{$roomb1r303->b1r303subject}}</h2></label>
                                <br>
    
                                <label><h3>Professor Name : {{$roomb1r303->b1r303professor}}</h3></label>
                                <br>
    
                                <label><h5>Schedule : {{$roomb1r303->b1r303schedulefrom}} -  {{$roomb1r303->b1r303scheduleto}}</h5></label>
                                <br>
    
                            </div>
                            
                            @endforeach

                            <script>
                                function subtractTime(hour, minute) {
                                let b1r303schedfrom = <?php echo json_encode($b1r303schedfrom); ?>;
                                let b1r303schedto = <?php echo json_encode($b1r303schedto); ?>;

                                for (let x = 0; x < b1r303schedfrom.length; x++) {
                                    for (let y = 0; y < b1r303schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b1r303schedfrom[x].b1r303schedulefrom) * 60;
                                        const sto = (b1r303schedto[x].b1r303scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B1 Room 303 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b1r303col) {
                                    let b1r303column = <?php echo json_encode($b1r303col); ?>;
                                
                                    for(let a = 0; a<b1r303column.length; a++){
                                        deleteData(b1r303column[a].id,b1r303column[a].subject,b1r303column[a].professor,b1r303column[a].schedulefrom,b1r303column[a].scheduleto,b1r303column[a].created_at,b1r303column[a].updated_at);
                                
                                        b1r303column.splice(a, 1);
                                        a--;
                                
                                        console.log(b1r303column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b1r303/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b1r303current = new Date();
                                setTimeout(tableDeletion, subtractTime(b1r303current.getHours(), b1r303current.getMinutes()));
                            </script>
    
                            <div class="modal-footer">
    
                                <p>Status</p>
    
                            </div>
    
                            </div>
    
                        </div>
    
                    </div>

                    {{--  --}}

                    <div id="b1r201" class="modal fade" role="dialog">

                        <div class="modal-dialog">
                            
                            <div class="modal-content"> 
    
                            <div class="modal-header">
    
                                <h2  class="modal-header2">B1 Room 201</h2>
    
                            </div>
    
                            @foreach ($b1r201 as $roomb1r201)
    
                            <div class="modal-body">

                                <label><h2>Subject Name : {{$roomb1r201->b1r201subject}}</h2></label>
                                <br>
    
                                <label><h3>Professor Name : {{$roomb1r201->b1r201professor}}</h3></label>
                                <br>
    
                                <label><h5>Schedule : {{$roomb1r201->b1r201schedulefrom}} -  {{$roomb1r201->b1r201scheduleto}}</h5></label>
                                <br>
    
                            </div>
                            
                            @endforeach

                            <script>
                                function subtractTime(hour, minute) {
                                let b1r201schedfrom = <?php echo json_encode($b1r201schedfrom); ?>;
                                letb1r201schedto = <?php echo json_encode($b1r201schedto); ?>;

                                for (let x = 0; x < b1r201schedfrom.length; x++) {
                                    for (let y = 0; y < b1r201schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b1r201schedfrom[x].b1r201schedulefrom) * 60;
                                        const sto = (b1r201schedto[x].b1r201scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B1 Room 201 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b1r201col) {
                                    let b1r201column = <?php echo json_encode($b1r201col); ?>;
                                
                                    for(let a = 0; a<b1r201column.length; a++){
                                        deleteData(b1r201column[a].id,b1r201column[a].subject,b1r201column[a].professor,b1r201column[a].schedulefrom,b1r201column[a].scheduleto,b1r201column[a].created_at,b1r201column[a].updated_at);
                                
                                        b1r201column.splice(a, 1);
                                        a--;
                                
                                        console.log(b1r201column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b1r201/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b1r201current = new Date();
                                setTimeout(tableDeletion, subtractTime(b1r201current.getHours(), b1r201current.getMinutes()));
                            </script>
    
                            <div class="modal-footer">
    
                                <p>Status</p>
    
                            </div>
    
                            </div>
    
                        </div>
    
                    </div>

                    {{--  --}}

                    <div id="b1r202" class="modal fade" role="dialog">

                        <div class="modal-dialog">
                            
                            <div class="modal-content"> 
    
                            <div class="modal-header">
    
                                <h2  class="modal-header2">B1 Room 202</h2>
    
                            </div>
    
                            @foreach ($b1r202 as $roomb1r202)
    
                            <div class="modal-body">

                                <label><h2>Subject Name : {{$roomb1r202->b1r202subject}}</h2></label>
                                <br>
    
                                <label><h3>Professor Name : {{$roomb1r202->b1r202professor}}</h3></label>
                                <br>
    
                                <label><h5>Schedule : {{$roomb1r202->b1r202schedulefrom}} -  {{$roomb1r202->b1r202scheduleto}}</h5></label>
                                <br>
    
                            </div>
                            
                            @endforeach

                            <script>
                                function subtractTime(hour, minute) {
                                let b1r202schedfrom = <?php echo json_encode($b1r202schedfrom); ?>;
                                let b1r202schedto = <?php echo json_encode($b1r202schedto); ?>;

                                for (let x = 0; x < b1r202schedfrom.length; x++) {
                                    for (let y = 0; y < b1r202schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b1r202schedfrom[x].b1r202schedulefrom) * 60;
                                        const sto = (b1r202schedto[x].b1r202scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B1 Room 202 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b1r202col) {
                                    let b1r202column = <?php echo json_encode($b1r202col); ?>;
                                
                                    for(let a = 0; a<b1r202column.length; a++){
                                        deleteData(b1r202column[a].id,b1r202column[a].subject,b1r202column[a].professor,b1r202column[a].schedulefrom,b1r202column[a].scheduleto,b1r202column[a].created_at,b1r202column[a].updated_at);
                                
                                        b1r202column.splice(a, 1);
                                        a--;
                                
                                        console.log(b1r202column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b1r202/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b1r202current = new Date();
                                setTimeout(tableDeletion, subtractTime(b1r202current.getHours(), b1r202current.getMinutes()));
                            </script>
    
                            <div class="modal-footer">
    
                                <p>Status</p>
    
                            </div>
    
                            </div>
    
                        </div>
    
                    </div>

                    {{--  --}}

                    <div id="b1r203" class="modal fade" role="dialog">

                        <div class="modal-dialog">
                            
                            <div class="modal-content"> 
    
                            <div class="modal-header">
    
                                <h2  class="modal-header2">B1 Room 203</h2>
    
                            </div>
    
                            @foreach ($b1r203 as $roomb1r203)
    
                            <div class="modal-body">

                                <label><h2>Subject Name : {{$roomb1r203->b1r203subject}}</h2></label>
                                <br>
    
                                <label><h3>Professor Name : {{$roomb1r203->b1r203professor}}</h3></label>
                                <br>
    
                                <label><h5>Schedule : {{$roomb1r203->b1r203schedulefrom}} -  {{$roomb1r203->b1r203scheduleto}}</h5></label>
                                <br>
    
                            </div>
                            
                            @endforeach

                            <script>
                                function subtractTime(hour, minute) {
                                let b1r203schedfrom = <?php echo json_encode($b1r203schedfrom); ?>;
                                let b1r203schedto = <?php echo json_encode($b1r203schedto); ?>;

                                for (let x = 0; x < b1r203schedfrom.length; x++) {
                                    for (let y = 0; y < b1r203schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b1r203schedfrom[x].b1r203schedulefrom) * 60;
                                        const sto = (b1r203schedto[x].b1r203scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B1 Room 203 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b1r203col) {
                                    let b1r203column = <?php echo json_encode($b1r203col); ?>;
                                
                                    for(let a = 0; a<b1r203column.length; a++){
                                        deleteData(b1r203column[a].id,b1r203column[a].subject,b1r203column[a].professor,b1r203column[a].schedulefrom,b1r203column[a].scheduleto,b1r203column[a].created_at,b1r203column[a].updated_at);
                                
                                        b1r203column.splice(a, 1);
                                        a--;
                                
                                        console.log(b1r203column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b1r203/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b1r203current = new Date();
                                setTimeout(tableDeletion, subtractTime(b1r203current.getHours(), b1r203current.getMinutes()));
                            </script>
    
                            <div class="modal-footer">
    
                                <p>Status</p>
    
                            </div>
    
                            </div>
    
                        </div>
    
                    </div>

                    {{--  --}}

                    <div id="b2r401" class="modal fade" role="dialog">

                        <div class="modal-dialog">
                            
                            <div class="modal-content"> 
    
                            <div class="modal-header">
    
                                <h2  class="modal-header2">B2 Room 401</h2>
    
                            </div>
    
                            @foreach ($b2r401 as $roomb2r401)
    
                            <div class="modal-body">

                                <label><h2>Subject Name : {{$roomb2r401->b2r401subject}}</h2></label>
                                <br>
    
                                <label><h3>Professor Name : {{$roomb2r401->b2r401professor}}</h3></label>
                                <br>
    
                                <label><h5>Schedule : {{$roomb2r401->b2r401schedulefrom}} -  {{$roomb2r401->b2r401scheduleto}}</h5></label>
                                <br>
    
                            </div>
                            
                            @endforeach

                            <script>
                                function subtractTime(hour, minute) {
                                let b2r401schedfrom = <?php echo json_encode($b2r401schedfrom); ?>;
                                let b2r401schedto = <?php echo json_encode($b2r401schedto); ?>;

                                for (let x = 0; x < b2r401schedfrom.length; x++) {
                                    for (let y = 0; y < b2r401schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b2r401schedfrom[x].b2r401schedulefrom) * 60;
                                        const sto = (b2r401schedto[x].b2r401scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B2 Room 401 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(bb2r401col) {
                                    let b2r401column = <?php echo json_encode($b2r401col); ?>;
                                
                                    for(let a = 0; a<b2r401column.length; a++){
                                        deleteData(b2r401column[a].id,b2r401column[a].subject,b2r401column[a].professor,b2r401column[a].schedulefrom,b2r401column[a].scheduleto,b2r401column[a].created_at,b2r401column[a].updated_at);
                                
                                        b2r401column.splice(a, 1);
                                        a--;
                                
                                        console.log(b2r401column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b2r401/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b2r401current = new Date();
                                setTimeout(tableDeletion, subtractTime(b2r401current.getHours(), b2r401current.getMinutes()));
                            </script>
    
                            <div class="modal-footer">
    
                                <p>Status</p>
    
                            </div>
    
                            </div>
    
                        </div>
    
                        </div>
    
                        {{--  --}}
    
                        <div id="b2r402" class="modal fade" role="dialog">
    
                            <div class="modal-dialog">
                                
                                <div class="modal-content"> 
        
                                <div class="modal-header">
        
                                    <h2  class="modal-header2">B1 Room 402</h2>
        
                                </div>
        
                                @foreach ($b2r402 as $roomb2r402)
        
                                <div class="modal-body">

                                    <label><h2>Subject Name : {{$roomb2r402->b2r402subject}}</h2></label>
                                    <br>
        
                                    <label><h3>Professor Name : {{$roomb2r402->b2r402professor}}</h3></label>
                                    <br>
        
                                    <label><h5>Schedule : {{$roomb2r402->b2r402schedulefrom}} -  {{$roomb2r402->b2r402scheduleto}}</h5></label>
                                    <br>
        
                                </div>
                                
                                @endforeach

                                <script>
                                function subtractTime(hour, minute) {
                                let b2r402schedfrom = <?php echo json_encode($b2r402schedfrom); ?>;
                                let b2r402schedto = <?php echo json_encode($b2r402schedto); ?>;

                                for (let x = 0; x < b2r402schedfrom.length; x++) {
                                    for (let y = 0; y < b2r402schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b2r402schedfrom[x].b2r402schedulefrom) * 60;
                                        const sto = (b2r402schedto[x].b2r402scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B2 Room 402 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b2r402col) {
                                    let b2r402column = <?php echo json_encode($b2r402col); ?>;
                                
                                    for(let a = 0; a<b2r402column.length; a++){
                                        deleteData(b2r402column[a].id,b2r402column[a].subject,b2r402column[a].professor,b2r402column[a].schedulefrom,b2r402column[a].scheduleto,b2r402column[a].created_at,b2r402column[a].updated_at);
                                
                                        b2r402column.splice(a, 1);
                                        a--;
                                
                                        console.log(b2r402column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b2r402/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b2r402current = new Date();
                                setTimeout(tableDeletion, subtractTime(b2r402current.getHours(), b2r402current.getMinutes()));
                            </script>
        
                                <div class="modal-footer">
        
                                    <p>Status</p>
        
                                </div>
        
                                </div>
        
                            </div>
        
                        </div>
    
                        {{--  --}}
    
                        <div id="b2r403" class="modal fade" role="dialog">
    
                            <div class="modal-dialog">
                                
                                <div class="modal-content"> 
        
                                <div class="modal-header">
        
                                    <h2  class="modal-header2">B2 Room 403</h2>
        
                                </div>
        
                                @foreach ($b2r403 as $roomb2r403)
        
                                <div class="modal-body">

                                    <label><h2>Subject Name : {{$roomb2r403->b2r403subject}}</h2></label>
                                    <br>
        
                                    <label><h3>Professor Name : {{$roomb2r403->b2r403professor}}</h3></label>
                                    <br>
        
                                    <label><h5>Schedule : {{$roomb2r403->b2r403schedulefrom}} -  {{$roomb2r403->b2r403scheduleto}}</h5></label>
                                    <br>
        
                                </div>
                                
                                @endforeach

                                <script>
                                function subtractTime(hour, minute) {
                                let b2r403schedfrom = <?php echo json_encode($b2r403schedfrom); ?>;
                                let b2r403schedto = <?php echo json_encode($b2r403schedto); ?>;

                                for (let x = 0; x < b2r403schedfrom.length; x++) {
                                    for (let y = 0; y < b2r403schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b2r403schedfrom[x].b2r403schedulefrom) * 60;
                                        const sto = (b2r403schedto[x].b2r403scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B2 Room 403 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b2r403col) {
                                    let b2r403column = <?php echo json_encode($b2r403col); ?>;
                                
                                    for(let a = 0; a<b2r403column.length; a++){
                                        deleteData(b2r403column[a].id,b2r403column[a].subject,b2r403column[a].professor,b2r403column[a].schedulefrom,b2r403column[a].scheduleto,b2r403column[a].created_at,b2r403column[a].updated_at);
                                
                                        b2r403column.splice(a, 1);
                                        a--;
                                
                                        console.log(b2r403column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b2r403/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b2r403current = new Date();
                                setTimeout(tableDeletion, subtractTime(b2r403current.getHours(), b2r403current.getMinutes()));
                            </script>
        
                                <div class="modal-footer">
        
                                    <p>Status</p>
        
                                </div>
        
                                </div>
        
                            </div>
        
                        </div>
    
                        {{--  --}}
    
                        <div id="b2r301" class="modal fade" role="dialog">
    
                            <div class="modal-dialog">
                                
                                <div class="modal-content"> 
        
                                <div class="modal-header">
        
                                    <h2  class="modal-header2">B2 Room 301</h2>
        
                                </div>
        
                                @foreach ($b2r301 as $roomb2r301)
        
                                <div class="modal-body">

                                    <label><h2>Subject Name : {{$roomb2r301->b2r301subject}}</h2></label>
                                    <br>
        
                                    <label><h3>Professor Name : {{$roomb2r301->b2r301professor}}</h3></label>
                                    <br>
        
                                    <label><h5>Schedule : {{$roomb2r301->b2r301schedulefrom}} -  {{$roomb2r301->b2r301scheduleto}}</h5></label>
                                    <br>
        
                                </div>
                                
                                @endforeach

                                <script>
                                function subtractTime(hour, minute) {
                                let b2r301schedfrom = <?php echo json_encode($b2r301schedfrom); ?>;
                                let b2r301schedto = <?php echo json_encode($b2r301schedto); ?>;

                                for (let x = 0; x < b2r301schedfrom.length; x++) {
                                    for (let y = 0; y < b2r301schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b2r301schedfrom[x].b2r301schedulefrom) * 60;
                                        const sto = (b2r301schedto[x].b2r301scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B2 Room 301 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b2r301col) {
                                    let b2r301column = <?php echo json_encode($b2r301col); ?>;
                                
                                    for(let a = 0; a<b2r301column.length; a++){
                                        deleteData(b2r301column[a].id,b2r301column[a].subject,b2r301column[a].professor,b2r301column[a].schedulefrom,b2r301column[a].scheduleto,b2r301column[a].created_at,b2r301column[a].updated_at);
                                
                                        b2r301column.splice(a, 1);
                                        a--;
                                
                                        console.log(b2r301column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b2r301/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b2r301current = new Date();
                                setTimeout(tableDeletion, subtractTime(b2r301current.getHours(), b2r301current.getMinutes()));
                            </script>
        
                                <div class="modal-footer">
        
                                    <p>Status</p>
        
                                </div>
        
                                </div>
        
                            </div>
        
                        </div>
    
                        {{--  --}}
    
                        <div id="b2r302" class="modal fade" role="dialog">
    
                            <div class="modal-dialog">
                                
                                <div class="modal-content"> 
        
                                <div class="modal-header">
        
                                    <h2  class="modal-header2">B2 Room 302</h2>
        
                                </div>
        
                                @foreach ($b2r302 as $roomb2r302)
        
                                <div class="modal-body">

                                    <label><h2>Subject Name : {{$roomb2r302->b2r302subject}}</h2></label>
                                    <br>
        
                                    <label><h3>Professor Name : {{$roomb2r302->b2r302professor}}</h3></label>
                                    <br>
        
                                    <label><h5>Schedule : {{$roomb2r302->b2r302schedulefrom}} -  {{$roomb2r302->b2r302scheduleto}}</h5></label>
                                    <br>
        
                                </div>
                                
                                @endforeach

                                <script>
                                function subtractTime(hour, minute) {
                                let b2r302schedfrom = <?php echo json_encode($b2r302schedfrom); ?>;
                                let b2r302schedto = <?php echo json_encode($b2r302schedto); ?>;

                                for (let x = 0; x < b2r302schedfrom.length; x++) {
                                    for (let y = 0; y < b2r302schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b2r302schedfrom[x].b2r302schedulefrom) * 60;
                                        const sto = (b2r302schedto[x].b2r302scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B2 Room 302 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b2r302col) {
                                    let b2r302column = <?php echo json_encode($b2r302col); ?>;
                                
                                    for(let a = 0; a<b2r302column.length; a++){
                                        deleteData(b2r302column[a].id,b2r302column[a].subject,b2r302column[a].professor,b2r302column[a].schedulefrom,b2r302column[a].scheduleto,b2r302column[a].created_at,b2r302column[a].updated_at);
                                
                                        b2r302column.splice(a, 1);
                                        a--;
                                
                                        console.log(b2r302column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b2r302/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b2r302current = new Date();
                                setTimeout(tableDeletion, subtractTime(b2r302current.getHours(), b2r302current.getMinutes()));
                            </script>
        
                                <div class="modal-footer">
        
                                    <p>Status</p>
        
                                </div>
        
                                </div>
        
                            </div>
        
                        </div>
    
                        {{--  --}}
    
                        <div id="b2r303" class="modal fade" role="dialog">
    
                            <div class="modal-dialog">
                                
                                <div class="modal-content"> 
        
                                <div class="modal-header">
        
                                    <h2  class="modal-header2">B2 Room 303</h2>
        
                                </div>
        
                                @foreach ($b2r303 as $roomb2r303)
        
                                <div class="modal-body">

                                    <label><h2>Subject Name : {{$roomb2r303->b2r303subject}}</h2></label>
                                    <br>
        
                                    <label><h3>Professor Name : {{$roomb2r303->b2r303professor}}</h3></label>
                                    <br>
        
                                    <label><h5>Schedule : {{$roomb2r303->b2r303schedulefrom}} -  {{$roomb2r303->b2r303scheduleto}}</h5></label>
                                    <br>
        
                                </div>
                                
                                @endforeach

                                <script>
                                function subtractTime(hour, minute) {
                                let b2r303schedfrom = <?php echo json_encode($b2r303schedfrom); ?>;
                                let b2r303schedto = <?php echo json_encode($b2r303schedto); ?>;

                                for (let x = 0; x < b2r303schedfrom.length; x++) {
                                    for (let y = 0; y < b2r303schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b2r303schedfrom[x].b2r303schedulefrom) * 60;
                                        const sto = (b2r303schedto[x].b2r303scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B2 Room 303 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b2r303col) {
                                    let b2r303column = <?php echo json_encode($b2r303col); ?>;
                                
                                    for(let a = 0; a<b2r303column.length; a++){
                                        deleteData(b2r303column[a].id,b2r303column[a].subject,b2r303column[a].professor,b2r303column[a].schedulefrom,b2r303column[a].scheduleto,b2r303column[a].created_at,b2r303column[a].updated_at);
                                
                                        b2r303column.splice(a, 1);
                                        a--;
                                
                                        console.log(b2r303column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b2r303/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b2r303current = new Date();
                                setTimeout(tableDeletion, subtractTime(b2r303current.getHours(), b2r303current.getMinutes()));
                            </script>
        
                                <div class="modal-footer">
        
                                    <p>Status</p>
        
                                </div>
        
                                </div>
        
                            </div>
        
                        </div>
    
                        {{--  --}}
    
                        <div id="b2r201" class="modal fade" role="dialog">
    
                            <div class="modal-dialog">
                                
                                <div class="modal-content"> 
        
                                <div class="modal-header">
        
                                    <h2  class="modal-header2">B2 Room 201</h2>
        
                                </div>
        
                                @foreach ($b2r201 as $roomb2r201)
        
                                <div class="modal-body">

                                    <label><h2>Subject Name : {{$roomb2r201->b2r201subject}}</h2></label>
                                    <br>
        
                                    <label><h3>Professor Name : {{$roomb2r201->b2r201professor}}</h3></label>
                                    <br>
        
                                    <label><h5>Schedule : {{$roomb2r201->b2r201schedulefrom}} -  {{$roomb2r201->b2r201scheduleto}}</h5></label>
                                    <br>
        
                                </div>
                                
                                @endforeach

                                <script>
                                function subtractTime(hour, minute) {
                                let b2r201schedfrom = <?php echo json_encode($b2r201schedfrom); ?>;
                                let b2r201schedto = <?php echo json_encode($b2r201schedto); ?>;

                                for (let x = 0; x < b2r201schedfrom.length; x++) {
                                    for (let y = 0; y < b2r201schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b2r201schedfrom[x].b2r201schedulefrom) * 60;
                                        const sto = (b2r201schedto[x].b2r201scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B2 Room 201 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b2r201col) {
                                    let b2r201column = <?php echo json_encode($b2r201col); ?>;
                                
                                    for(let a = 0; a<b2r201column.length; a++){
                                        deleteData(b2r201column[a].id,b2r201column[a].subject,b2r201column[a].professor,b2r201column[a].schedulefrom,b2r201column[a].scheduleto,b2r201column[a].created_at,b2r201column[a].updated_at);
                                
                                        b2r201column.splice(a, 1);
                                        a--;
                                
                                        console.log(b2r201column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b2r201/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b2r201current = new Date();
                                setTimeout(tableDeletion, subtractTime(b2r201current.getHours(), b2r201current.getMinutes()));
                            </script>
        
                                <div class="modal-footer">
        
                                    <p>Status</p>
        
                                </div>
        
                                </div>
        
                            </div>
        
                        </div>
    
                        {{--  --}}
    
                        <div id="b2r202" class="modal fade" role="dialog">
    
                            <div class="modal-dialog">
                                
                                <div class="modal-content"> 
        
                                <div class="modal-header">
        
                                    <h2  class="modal-header2">B2 Room 202</h2>
        
                                </div>
        
                                @foreach ($b2r202 as $roomb2r202)
        
                                <div class="modal-body">

                                    <label><h2>Subject Name : {{$roomb2r202->b2r202subject}}</h2></label>
                                    <br>
        
                                    <label><h3>Professor Name : {{$roomb2r202->b2r202professor}}</h3></label>
                                    <br>
        
                                    <label><h5>Schedule : {{$roomb2r202->b2r202schedulefrom}} -  {{$roomb2r202->b2r202scheduleto}}</h5></label>
                                    <br>
        
                                </div>
                                
                                @endforeach

                                <script>
                                function subtractTime(hour, minute) {
                                let b2r202schedfrom = <?php echo json_encode($b2r202schedfrom); ?>;
                                let b2r202schedto = <?php echo json_encode($b2r202schedto); ?>;

                                for (let x = 0; x < b2r202schedfrom.length; x++) {
                                    for (let y = 0; y < b2r202schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b2r202schedfrom[x].b2r202schedulefrom) * 60;
                                        const sto = (b2r202schedto[x].b2r202scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B2 Room 202 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b2r202col) {
                                    let b2r202column = <?php echo json_encode($b2r202col); ?>;
                                
                                    for(let a = 0; a<b2r202column.length; a++){
                                        deleteData(b2r202column[a].id,b2r202column[a].subject,b2r202column[a].professor,b2r202column[a].schedulefrom,b2r202column[a].scheduleto,b2r202column[a].created_at,b2r202column[a].updated_at);
                                
                                        b2r202column.splice(a, 1);
                                        a--;
                                
                                        console.log(b2r202column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b2r202/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b2r202current = new Date();
                                setTimeout(tableDeletion, subtractTime(b2r202current.getHours(), b2r202current.getMinutes()));
                            </script>
        
                                <div class="modal-footer">
        
                                    <p>Status</p>
        
                                </div>
        
                                </div>
        
                            </div>
        
                        </div>
    
                        {{--  --}}
    
                        <div id="b2r203" class="modal fade" role="dialog">
    
                            <div class="modal-dialog">
                                
                                <div class="modal-content"> 
        
                                <div class="modal-header">
        
                                    <h2  class="modal-header2">B2 Room 203</h2>
        
                                </div>
        
                                @foreach ($b2r203 as $roomb2r203)
        
                                <div class="modal-body">

                                    <label><h2>Subject Name : {{$roomb2r203->b2r203subject}}</h2></label>
                                    <br>
        
                                    <label><h3>Professor Name : {{$roomb2r203->b2r203professor}}</h3></label>
                                    <br>
        
                                    <label><h5>Schedule : {{$roomb2r203->b2r203schedulefrom}} -  {{$roomb2r203->b2r203scheduleto}}</h5></label>
                                    <br>
        
                                </div>
                                
                                @endforeach

                                <script>
                                function subtractTime(hour, minute) {
                                let b2r203schedfrom = <?php echo json_encode($b2r203schedfrom); ?>;
                                let b2r203schedto = <?php echo json_encode($b2r203schedto); ?>;

                                for (let x = 0; x < b2r203schedfrom.length; x++) {
                                    for (let y = 0; y < b1r401schedto.length; y++) {
                                    if (x === y) {

                                        const cth = hour;
                                        const ctm = minute;

                                        const ct = (Math.abs(hour) * 60) + Math.abs(minute);

                                        const st = (b2r203schedfrom[x].b2r203schedulefrom) * 60;
                                        const sto = (b2r203schedto[x].b2r203scheduleto) * 60;

                                        const result = (((st - ct) + (sto - st)) * 60) * 1000;
                                        console.log("B2 Room 203 : Data Duration : " + (((result / 1000) / 60)) + " Minutes" );
                                        return result;
                                    }
                                    }
                                }
                                }
                                
                                function tableDeletion(b2r203col) {
                                    let b2r203column = <?php echo json_encode($b2r203col); ?>;
                                
                                    for(let a = 0; a<b2r203column.length; a++){
                                        deleteData(b2r203column[a].id,b2r203column[a].subject,b2r203column[a].professor,b2r203column[a].schedulefrom,b2r203column[a].scheduleto,b2r203column[a].created_at,b2r203column[a].updated_at);
                                
                                        b2r203column.splice(a, 1);
                                        a--;
                                
                                        console.log(b2r203column);
                                    }
                                }
                                var $j = jQuery.noConflict(); 
                                
                                function deleteData(id){
                                    console.log("Data Deleted");
                                    jQuery.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        },
                                
                                        url: '/b2r203/' + id,
                                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                        dataType : 'json',
                                        type: 'POST',
                                        success: function(response) {
                                            // handle success response here
                                        },
                                        error: function(error) {
                                            // handle error response here
                                        }
                                    });
                                }
                                
                                const b2r203current = new Date();
                                setTimeout(tableDeletion, subtractTime(b2r203current.getHours(), b2r203current.getMinutes()));
                            </script>
        
                                <div class="modal-footer">
        
                                    <p>Status</p>
        
                                </div>
        
                                </div>
        
                            </div>
        
                        </div>
        
                    <div class="container announcement-container">
                    
                    <div id="carouselslide-announcement" class="carousel slide" data-ride="carousel ">

                        <div class="carousel-inner">

                        <div class="carousel-item active">

                            <h2 class="announcement-header2">Announcement 1</h2>

                            <a type="button" class="announcement-anchor" data-toggle="modal" data-target="#announcementInformation"><h6 class="announcement-header6">Click for More Information!</h6></a>

                        </div>

                        <div class="carousel-item">

                            <h2 class="announcement-header2">Announcement 2</h2>

                            <a type="button" class="announcement-anchor" data-toggle="modal" data-target="#announcementInformation"><h6 class="announcement-header6">Click for More Information!</h6></a>

                        </div>

                        <div class="carousel-item">

                            <h2 class="announcement-header2">Announcement 3</h2>

                            <a type="button" class="announcement-anchor" data-toggle="modal" data-target="#announcementInformation"><h6 class="announcement-header6">Click for More Information!</h6></a>

                        </div>

                        </div>

                        <button class="carousel-control-prev announcement-prev" type="button" data-target="#carouselslide-announcement" data-slide="prev">

                        <!-- <span class="carousel-control-prev-icon"></span> -->

                        </button>

                        <button class="carousel-control-next announcement-next" type="button" data-target="#carouselslide-announcement" data-slide="next">

                        <!-- <span class="carousel-control-next-icon"></span> -->

                        </button>

                    </div> 
                    
                    </div>

                    <div id="announcementInformation" class="modal fade" role="dialog">

                    <div class="modal-dialog">

                        <div class="modal-content">

                        <div class="modal-header">

                            <h2 class="modal-header2">Announcement Information</h2>

                        </div>

                        <div class="modal-body">

                            <label><h2>Header</h2></label>
                            <br>

                            <label><h5>Content</h5></label>

                        </div>

                        <div class="modal-footer">

                            <p>Polytechnic University Philippines</p>

                        </div>

                        </div>

                    </div>
                    
                    </div>
                    
                </div>
                
                </div>

            </div>

        </div>

        </div>  

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
@endsection

