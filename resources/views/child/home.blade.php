@extends('parent.master')

@section('title','Home Page')


@section('image_slider')

    <div id="carouselExampleIndicators" class="carousel slide" id="image-slider" data-ride="carousel" style="margin-top:70px;">

        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('Images/p1.jpg') }}" height="450px" alt="First slide">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('Images/p2.jpg') }}" height="450px" alt="Second slide">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('Images/p3.jpg') }}" height="450px" alt="Third slide">
            </div>

        </div>


        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>


        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

@endsection



@section('jumbotron')

        <div class="jumbotron mt-2" id="jumbotron">

            <div class="row">

                <div class="col-lg-4">
                    <img src="{{ asset('Images/p1.jpg') }}" width="300px" height="300px" alt="error">
                </div>

                <div class="col-lg-8">
                    <h1 class="display-3 text-success">Welcome</h1>
                    <p class="lead">Here is the welcome text</p>
                </div>

            </div>

        </div>

@endsection


@section('farmer_product')

    <h2 class="text-success">Farmer's Product</h2>

    <div class="row">

        <div class="col-lg-4" style="margin-bottom:10px;">

                <div class="card" style="width:350px">

                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">detial</a>
                        </div>
                    </div>

                </div>

        </div>


        <div class="col-lg-4" style="margin-bottom:10px;">

                <div class="card" style="width:350px">

                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">detial</a>
                        </div>
                    </div>

                </div>

        </div>


        <div class="col-lg-4" style="margin-bottom:10px;">

                <div class="card" style="width:350px">

                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">detial</a>
                        </div>
                    </div>

                </div>
        </div>

    </div>

@endsection



@section('company_product')

    <h2 class="text-success mt-5">Company's Product</h2>

    <div class="row" style="margin-bottom:50px;">

        <div class="col-lg-4" style="margin-bottom:10px;">

                <div class="card" style="width:350px">

                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">detial</a>
                        </div>
                    </div>

                </div>

        </div>


        <div class="col-lg-4" style="margin-bottom:10px;">

                <div class="card" style="width:350px">

                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">detial</a>
                        </div>
                    </div>

                </div>

        </div>


        <div class="col-lg-4" style="margin-bottom:10px;">

                <div class="card" style="width:350px">

                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">detial</a>
                        </div>
                    </div>

                </div>
        </div>

    </div>

@endsection



