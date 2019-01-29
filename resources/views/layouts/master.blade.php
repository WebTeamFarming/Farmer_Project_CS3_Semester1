<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>@yield('title','Master Page')</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    {{--cdn font awesome --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}

</head>

<body>

    <div class="container">

            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbar">

                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link text-white" href="#">Farmer Store</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Tool Store</a>
                        </li>

                    </ul>

                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="text-white mr-3" id="btn-login">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-white" id="btn-register">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif


                </div>

            </nav>


            @section('content')
            @show


        {{-- Image slider --}}

        @yield('image_slider')



        {{-- Jumbotron --}}

        @yield('jumbotron')



        {{-- farmer's product card --}}

        @yield('farmer_product')



        {{-- company's product card --}}

        @yield('company_product')

    </div>

    <script>
        $(document).ready(function(){
            $(".dropdown-toggle").dropdown();
        });
    </script>



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>

</html>
