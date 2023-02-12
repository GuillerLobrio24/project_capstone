<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/index.css')}}" rel="stylesheet">
        <link  rel="stylesheet" href="{{asset('build/assets/app.css')}}">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        

    </head>
    <body>
        
    <!-- Navigation Bar -->

    <nav class="navbar">

        <div class="container">

            <div class="navbar-header">
    
                <img class="navigation-bar-logo" src="images/puplogo.png" alt="">
    
                <a class="navbar-brand" href="#">Polytechnic University of the Philippines - Biñan Campus</a>
    
            </div>

        </div>
        
    </nav>

    @yield('index')

    
    
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
                const now =new Date();

                timeElement.textContent = formatTime(now);
                dateElement.textContent = formatDate(now);
            }, 200);

    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</html>
