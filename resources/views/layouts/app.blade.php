<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/index.css')}}" rel="stylesheet">
    <link  rel="stylesheet" href="{{asset('build/assets/app.css')}}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-3 offcanvas-container">

                <a class="offcanvas-header-anchor" href="/home"><h2 class="offcanvas-header2">Administrator</h2></a>

                <div class="dropdown">
                    
                    <a class="offcanvas-anchor" href="#" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h5 class="offcanvas-header5">Add Data</h5>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        
                        <a type="button" class="offcanvas-anchor" href="/subject_add"><h5 class="offcanvas-header5">Add Subject</h5></a>

                        <a type="button" class="offcanvas-anchor" href="/professor_add"><h5 class="offcanvas-header5">Add Professor</h5></a>
                        
                    </div>

                </div>

                <div class="dropdown">
                    <a class="offcanvas-anchor" href="#" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h5 class="offcanvas-header5">Select Rooms</h5>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a type="button" class="offcanvas-anchor" href="/b1r401"><h5 class="offcanvas-header5">B1 Room 401</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b1r402"><h5 class="offcanvas-header5">B1 Room 402</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b1r403"><h5 class="offcanvas-header5">B1 Room 403</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b1r301"><h5 class="offcanvas-header5">B1 Room 301</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b1r302"><h5 class="offcanvas-header5">B1 Room 302</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b1r303"><h5 class="offcanvas-header5">B1 Room 303</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b1r201"><h5 class="offcanvas-header5">B1 Room 201</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b1r202"><h5 class="offcanvas-header5">B1 Room 202</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b1r203"><h5 class="offcanvas-header5">B1 Room 203</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b2r401"><h5 class="offcanvas-header5">B2 Room 401</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b2r402"><h5 class="offcanvas-header5">B2 Room 402</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b2r403"><h5 class="offcanvas-header5">B2 Room 403</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b2r301"><h5 class="offcanvas-header5">B2 Room 301</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b2r302"><h5 class="offcanvas-header5">B2 Room 302</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b2r303"><h5 class="offcanvas-header5">B2 Room 303</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b2r201"><h5 class="offcanvas-header5">B2 Room 201</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b2r202"><h5 class="offcanvas-header5">B2 Room 202</h5></a>
                        <a type="button" class="offcanvas-anchor" href="/b2r203"><h5 class="offcanvas-header5">B2 Room 203</h5></a>
                    </div>
                </div>

                <a type="button" class="offcanvas-anchor" href="/subject"><h5 class="offcanvas-header5">Subjects</h5></a>

                <a type="button" class="offcanvas-anchor" href="/professor"><h5 class="offcanvas-header5">Professors</h5></a>

                <a type="button" class="offcanvas-anchor" href="/announcement"><h5 class="offcanvas-header5">Announcements</h5></a>
                <a type="button" class="offcanvas-anchor" href="/otherannouncement"><h5 class="offcanvas-header5">Other Announcements</h5></a>

            </div>

            <div class="col-md-9 offcanvas-main-container">

                <div id="app">
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
            
                            <img class="navigation-bar-logo-admin" src="/images/puplogo.png" alt="">
                            
                            <a class="navbar-brand" href="#">Polytechnic University of the Philippines - Biñan Campus</a> 
            
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>
            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav me-auto">
            
                                </ul>
            
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ms-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif
            
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
            

                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
                    
                    <main>
                        @yield('b1r401')
                        @yield('b1r401_view')
                        @yield('b1r401_edit')
                        @yield('b1r402')
                        @yield('b1r402_view')
                        @yield('b1r402_edit')
                        @yield('b1r403')
                        @yield('b1r403_view')
                        @yield('b1r403_edit')
                        @yield('b1r301')
                        @yield('b1r301_view')
                        @yield('b1r301_edit')
                        @yield('b1r302')
                        @yield('b1r302_view')
                        @yield('b1r302_edit')
                        @yield('b1r303')
                        @yield('b1r303_view')
                        @yield('b1r303_edit')
                        @yield('b1r201')
                        @yield('b1r201_view')
                        @yield('b1r201_edit')
                        @yield('b1r202')
                        @yield('b1r202_view')
                        @yield('b1r202_edit')
                        @yield('b1r203')
                        @yield('b1r203_view')
                        @yield('b1r203_edit')

                        @yield('b2r401')
                        @yield('b2r401_view')
                        @yield('b2r401_edit')
                        @yield('b2r402')
                        @yield('b2r402_view')
                        @yield('b2r402_edit')
                        @yield('b2r403')
                        @yield('b2r403_view')
                        @yield('b2r403_edit')
                        @yield('b2r301')
                        @yield('b2r301_view')
                        @yield('b2r301_edit')
                        @yield('b2r302')
                        @yield('b2r302_view')
                        @yield('b2r302_edit')
                        @yield('b2r303')
                        @yield('b2r303_view')
                        @yield('b2r303_edit')
                        @yield('b2r201')
                        @yield('b2r201_view')
                        @yield('b2r201_edit')
                        @yield('b2r202')
                        @yield('b2r202_view')
                        @yield('b2r202_edit')
                        @yield('b2r203')
                        @yield('b2r203_view')
                        @yield('b2r203_edit')

                        @yield('admin')
                        @yield('index')

                        @yield('subject_add')
                        @yield('subject')
                        @yield('subject_view')
                        @yield('subject_edit')

                        @yield('professor_add')
                        @yield('professor')
                        @yield('professor_view')
                        @yield('professor_edit')
                        
                        @yield('announcement_publish')
                        @yield('otherannouncement_publish')
                        
                        @yield('announcement')
                        @yield('announcement_view')
                        @yield('announcement_edit')

                        @yield('otherannouncement')
                        @yield('otherannouncement_view')
                        @yield('otherannouncement_edit')
                    </main>

                </div>

            </div>

        </div>

    </div>

	

    
</body>
<script>

        
    // Date Section

    const timeElement = document.querySelector(".time");
    const dateElement = document.querySelector(".date");

    /**
     * 
     * @param {Date} date 
     */
    function formatTime(date){
        const hours = date.getHours() % 12 || 12;
        const minutes = date.getMinutes();
        const seconds = date.getSeconds();
        const ampm = date.getHours() < 12;

        return `${hours.toString().padStart(2, "0")}:${minutes.toString().padStart(2, "0")}:${seconds.toString().padStart(2, "0")} ${ampm ? "AM" : "PM"}`;
    }

    /**
     * 
     * @param {Date} date 
     */
    function formatDate(date){
        const Days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        const Months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        return `${Days[date.getDay()]}, ${Months[date.getMonth()]}, ${date.getFullYear()}`;
    }

    setInterval(() => {
        const now = new Date();

        timeElement.textContent = formatTime(now);
        dateElement.textContent = formatDate(now);
    },  1000);
    

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>
