
@extends('layouts.master')

@section('css')

   <link rel="stylesheet" href="{{ asset('css/farmer_store.css') }}">

@endsection

@section('title','Farmer Store')


@section('content')

    {{-- search category --}}
    <form action="" id="btn-category">

        <div class="form-group">

            <label for="sel1" class="font-weight-bold">Category</label>

            <select class="form-control" id="sel1">

                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>

            </select>

        </div>

    </form>


    <div class="row" id="farmer-store">

        <div class="col-lg-4" style="margin-bottom:10px;">

                <div class="card" style="width:350px">

                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                    <div class="card-body">
                        <p class="card-text font-weight-bold">Product Name : </p>
                        <p class="card-text font-weight-bold">Price : </p>
                        <p class="card-text font-weight-bold">Owner : </p>
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
                        <p class="card-text font-weight-bold">Product Name : </p>
                        <p class="card-text font-weight-bold">Price : </p>
                        <p class="card-text font-weight-bold">Owner : </p>
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
                        <p class="card-text font-weight-bold">Product Name : </p>
                        <p class="card-text font-weight-bold">Price : </p>
                        <p class="card-text font-weight-bold">Owner : </p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">detial</a>
                        </div>
                    </div>

                </div>
        </div>

    </div>


@endsection
