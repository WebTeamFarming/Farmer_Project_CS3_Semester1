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

            <div class="footer">
                <form action="{{route('user.profile')}}" enctype="multipart/form-data" method="POST" id="form-img" class="image-upload">
                    @csrf
                    <input type="file" name="avatar" style="display:none;" id="profile-img">
                    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                    <div class="text-center"><input type="submit" class="btn-primary " value="change" style="border-radius: 5px; width:100px; margin-bottom:10px;"></div>
                </form>
            </div>

        </div>


    </div>

    <div class="text-center" style="margin-bottom: 20px;">

        <ul>

            <li style="margin-right:10px;">

                <div class="text-center" style="cursor:pointer;" data-toggle="modal" data-target="#myModal">
                    <img src="/Images/pencil.png" class="rounded-circle" alt="Create Post" width="100px">
                </div>

                <div class="text-center">
                    Create Post
                </div>
            </li>

            <li style="margin-right:20px;">

                <div class="text-center" style="cursor:pointer;" data-toggle="modal" data-target="#myModal">
                    <a href="{{route('own.post')}}"><img src="/Images/businessman.png" class="rounded-circle" alt="Create Post" width="100px"></a>
                </div>

                <div class="text-center">
                    Manage Post
                </div>
            </li>

        </ul>

    </div>

    <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header bg-danger">
              <h4 class="modal-title text-white">Create New Post</h4>
              <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                    <form method="POST" action="{{route('post.create')}}" enctype="multipart/form-data">
                    @csrf
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    <div class="row">


                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="title_post" class="">{{ __('Title') }}</label>
                                <input id="title_post" type="text" class="form-control{{ $errors->has('title_post') ? ' is-invalid' : '' }}" name="title_post" value="{{ old('title_post') }}" required autofocus>

                                @if ($errors->has('title_post'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title_post') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <br>

                            <div class="form-group">
                                <label for="price_post" class="">{{ __('Price') }}</label>
                                <input id="price_post" type="text" class="form-control{{ $errors->has('price_post') ? ' is-invalid' : '' }}" name="price_post" value="{{ old('price_post') }}" required>

                                @if ($errors->has('price_post'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price_post') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <br>

                            <div class="form-group">
                                <label for="phone_post" class="">{{ __('Phone') }}</label>
                                <input id="phone_post" type="text" class="form-control{{ $errors->has('phone_post') ? ' is-invalid' : '' }}" name="phone_post" value="{{ old('phone_post') }}" required>

                                @if ($errors->has('phone_post'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_post') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <br>

                            <div class="form-group">
                                <label for="post_img" class="">{{ __('Image Post') }}</label>
                                <input id="post_img" type="file" class="form-control{{ $errors->has('post_img') ? ' is-invalid' : '' }}" name="post_img" value="{{ old('post_img') }}" required>

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
                                    <option value="{{$c->category_name}}">{{$c->category_name}}</option>
                                    @endif

                                    @endif

                                    @if(Auth::user()->user_type_id == 2)

                                    @if($c->category_type == 2)
                                    <option value="{{$c->category_name}}">{{$c->category_name}}</option>
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

                            {{-- <div class="form-group">
                                <label for="description_post" class="">{{ __('Description') }}</label>
                                <input id="description_post" type="text" class="form-control{{ $errors->has('description_post') ? ' is-invalid' : '' }}" name="description_post" value="{{ old('description_post') }}" required>

                                @if ($errors->has('description_post'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description_post') }}</strong>
                                    </span>
                                @endif
                            </div> --}}


                            <div class="form-group">

                                <label for="description_post" class="">{{ __('Description') }}</label>
                                <textarea id="description_post" class="form-control" name="description_post"></textarea>
                            </div>


                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success" style="width:150px;">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </div>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection



{{-- @section('js')

    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description_post' );
    </script>

@endsection --}}

{{-- @section('js')

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>

@endsection --}}


{{-- @section('js')

    <script>

            var image = document.getElementById('imageProfile');
            var fileImg = document.getElementById('fileImg');

            image.addEventListener("click",function() {

                fileImg.click();
            })

    </script>

@endsection --}}
