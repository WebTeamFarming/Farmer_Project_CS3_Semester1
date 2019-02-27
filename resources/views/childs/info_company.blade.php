@extends('parent.master')

@section('title','Detial Farmer Producte')




@section('info')

    <div class="container">

        <div class="card" style="margin:100px; 0px;">

            <div class="card-header text-center">
                Product Detail Information
            </div>

            <div class="card-body text-center">
                <img src="/uploads/avatars/{{$posts->post_image}}" alt="erro image">
                <p>Title : {{ $posts->title }}</p>
                <p>Price : {{ $posts->price }}</p>
                <p>Post Phone : {{ $posts->post_phone }}</p>
                <p>Description : {{ $posts->description }}</p>
                <p>Owner Name : {{ $posts->user->name }}</p>
                <p>Owner Phone : {{ $posts->user->phone }}</p>
                <p>Owner Email : {{ $posts->user->email }}</p>
            </div>

        </div>

    </div>

@endsection


