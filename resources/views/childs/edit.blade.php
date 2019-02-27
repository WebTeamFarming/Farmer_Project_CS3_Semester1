@extends('parent.master')

@section('title')

@section('css')

    <style>

        .container{}
    </style>

@endsection

@section('content')


<div class="container">

    <div class="card" style="margin:100px;">

        <div class="card-header"><h2>Edit Post<h2></div>

            <div class="card-body">
                <form method="POST" action="{{route('post.save',$posts->id)}}" enctype="multipart/form-data" id="form-edit">
                    @csrf
                    <div class="form-group">
                        <label for="title_post" class="">{{ __('Title') }}</label>
                        <input id="title_post" type="text" class="form-control{{ $errors->has('title_post') ? ' is-invalid' : '' }}" name="title_post" value="{{$posts->title}}" required autofocus>

                        @if ($errors->has('title_post'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title_post') }}</strong>
                            </span>
                        @endif
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="price_post" class="">{{ __('Price') }}</label>
                        <input id="price_post" type="text" class="form-control{{ $errors->has('price_post') ? ' is-invalid' : '' }}" name="price_post" value="{{$posts->price}}" required>

                        @if ($errors->has('price_post'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('price_post') }}</strong>
                            </span>
                        @endif
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="phone_post" class="">{{ __('Phone') }}</label>
                        <input id="phone_post" type="text" class="form-control{{ $errors->has('phone_post') ? ' is-invalid' : '' }}" name="phone_post" value="{{$posts->post_phone}}" required>

                        @if ($errors->has('phone_post'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone_post') }}</strong>
                            </span>
                        @endif
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="post_img" class="">{{ __('Image Post') }}</label>
                        <input id="post_img" type="file" class="form-control{{ $errors->has('post_img') ? ' is-invalid' : '' }}" name="post_img" value="{{$posts->post_image}}">

                        @if ($errors->has('post_img'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('post_img') }}</strong>
                            </span>
                        @endif
                    </div>

                    <br>

                    <div class="form-group">

                        <label for="category_post">Category Name</label>

                        <select class="form-control" id="category_post" name="category_post">



                                @foreach ($cate as $c)

                                @if(Auth::user()->user_type_id == 1)

                                @if($c->category_type == 1)
                                    @if($c->id == $posts->category_id)
                                    <option value="{{$c->category_name}}" selected>{{$c->category_name}}</option>
                                    @else
                                    <option value="{{$c->category_name}}">{{$c->category_name}}</option>
                                    @endif
                                @endif

                                @endif

                                @if(Auth::user()->user_type_id == 2)

                                @if($c->category_type == 2)
                                    @if($c->id == $posts->category_id)
                                    <option value="{{$c->category_name}}" selected>{{$c->category_name}}</option>
                                    @else
                                    <option value="{{$c->category_name}}">{{$c->category_name}}</option>
                                    @endif
                                @endif

                                @endif

                                @endforeach


                        </select>

                        @if ($errors->has('category_post'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('category_post') }}</strong>
                            </span>
                        @endif
                    </div>

                    <br>

                    <div class="form-group">

                        <label for="description_post" class="">{{ __('Description') }}</label>
                        <textarea id="description_post" class="form-control" name="description_post" >{{$posts->description}}</textarea>
                    </div>


                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success" style="width:150px">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>

                </form>

            </div>
    </div>

</div>

@endsection


<script type="text/javascript">


    function confirmDelete(item_id, name) {
      swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover it!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
          .then((willDelete) => {
              if (willDelete) {
                swal("" + name + " has been deleted successfully.").then(function(){
                  document.getElementById(item_id).submit();
                })
              } else {
                  swal("Cancelled Successfully");
              }
          });
    }
  </script>
  @endsection
