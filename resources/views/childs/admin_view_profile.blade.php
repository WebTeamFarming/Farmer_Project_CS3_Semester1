{{-- @extends('layouts.app') --}}

@extends('parent.master')

@section('css')

    <style>

        #profile-view{

            margin:80px 0px;
        }

        ul>li{

            display: inline-block;
        }
    </style>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">

@endsection

@section('content')

    <div class="row justify-content-center" id="profile-view">

        <div class="card">

            <div class="text-center card-header" style="cursor:pointer;"><img width="250px" id="user-img" src="/uploads/avatars/{{$user->image}}" class="rounded-circle" alt="Cinque Terre"  ></div>

            <div class="card-body text-center">
                <p>Fullname : {{$user->name}}</p>
                <p>Email : {{$user->email}}</p>
                <p>Phone : {{$user->phone}}</p>

            </div>

        </div>


    </div>


@endsection




