@extends('layouts.master')

@section('title', "Form's farmer Post")

@section('css')

    <style>
        .form-post{

            margin-top:70px;
            margin-bottom:70px;
        }
    </style>

@endsection

@section('content')

{!! Form::open(['url' => '','method' => 'post','file' => 'true','class' => 'form-post']) !!}

    <div class="form-control">

        {!!Form::label('title','Title',['class'=>'col-md-4']) !!}

        <div class="col-md-6">

            {!!Form::text('title','',['class'=>'form-control']) !!}
        </div>

    </div>

{!! Form::close() !!}

@endsection

