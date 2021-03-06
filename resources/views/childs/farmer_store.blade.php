
@extends('parent.master')

@section('css')

   {{-- <link rel="stylesheet" href="{{ asset('css/farmer_store.css') }}"> --}}

   <style>

        #btn-category{

        margin-top:100px;
        }

        .form-group{
        width:200px;
        margin-top:50px;
        }

        #farmer-store{

            margin-bottom: 20px;
        }

   </style>

@endsection


@section('title','Farmer Store')



@section('content')


   <h2 class="text-center text-white">All Product</h2>

    {{-- search category --}}

    <div class="form-group">

        <label for="sel1" class="font-weight-bold">Category</label>

        <select class="form-control" id="sel1">

            @foreach ($cats as $cat)

                @if($cat->category_type == 1)

                    <a href="{{route('searchFarmer',$cat->category_type)}}">
                        <option class="option" value="{{$cat->category_name}}">
                            {{$cat->category_name}}
                        </option>
                    </a>

                @endif

            @endforeach


        </select>

    </div>




    <div class="row" id="farmer-store">
        @foreach ($posts as $post)

        <div class="col-lg-4" style="margin-bottom:10px;">

                <div class="card text-center" style="width:350px">

                    <div><img class="card-img-top" src="/uploads/avatars/{{$post->post_image}}" alt="Card image" style="height:200px;"></div>

                    <div class="card-body">
                        <p class="card-text font-weight-bold">Product Name : {{$post->title}}</p>
                        <p class="card-text font-weight-bold">Price : {{$post->price}}</p>
                        <p class="card-text font-weight-bold">Owner : {{$post->user->name}}</p>
                        <div class="text-center">
                            <a href="{{route('productFarmer.info',$post->id)}}" class="btn btn-primary" style="width:100px;">detial</a>
                        </div>
                    </div>

                </div>

        </div>

        @endforeach

    </div>


@endsection
