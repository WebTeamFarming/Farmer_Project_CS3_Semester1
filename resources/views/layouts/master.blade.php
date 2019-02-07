<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Master Page')</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    {{--cdn font awesome --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">

    @yield('css')



</head>

<body>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top" style="margin-bottom:70px">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbar">

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link text-white" href="{{ route('home.farmer_store') }}">Farmer Store</a>
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
    </div>
    <div class="container">

        <p class="clearfix"></p>

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


    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark">

        <div style="background-color: #6351ce;">

            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 text-white">Get connected with us on social networks!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                    <!-- Facebook -->
                    <a class="fb-ic">
                    <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                    <i class="fab fa-twitter white-text mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                    <i class="fab fa-google-plus-g white-text mr-4"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                    <i class="fab fa-linkedin-in white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                    <i class="fab fa-instagram white-text"> </i>
                    </a>

                </div>
                <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>

        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Company name</h6>

                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>

                </div>
                <!-- Grid column -->


                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <p>
                        <a href="#!">MDBootstrap</a>
                    </p>

                    <p>
                        <a href="#!">MDWordPress</a>
                    </p>

                    <p>
                        <a href="#!">BrandFlow</a>
                    </p>

                    <p>
                        <a href="#!">Bootstrap Angular</a>
                    </p>

                </div>
                <!-- Grid column -->


                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <p>
                        <a href="#!">Your Account</a>
                    </p>

                    <p>
                        <a href="#!">Become an Affiliate</a>
                    </p>

                    <p>
                        <a href="#!">Shipping Rates</a>
                    </p>

                    <p>
                        <a href="#!">Help</a>
                    </p>

                </div>
                <!-- Grid column -->


                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>

                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->


        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

  </footer>
  <!-- Footer -->


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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"></script>
</body>

</html>
