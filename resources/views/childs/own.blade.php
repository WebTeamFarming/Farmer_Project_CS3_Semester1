
@extends('parent.master')

@section('title','Own Post')


@section('css')

   {{-- <link rel="stylesheet" href="{{ asset('css/farmer_store.css') }}"> --}}

   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   <style>

        #btn-category{

        margin-top:100px;
        }

        .form-group{
        width:200px;
        }

        #farmer-store{

            margin-bottom: 20px;
        }

   </style>

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
        @foreach ($posts as $post)

        <div class="col-lg-4" style="margin-bottom:10px;">

                <div class="card text-center" style="width:350px">

                    <div><img class="card-img-top" src="/uploads/avatars/{{$post->post_image}}" alt="Card image"></div>

                    <div class="card-body">
                        <p class="card-text font-weight-bold">Product Name : {{$post->title}}</p>
                        <p class="card-text font-weight-bold">Price : {{$post->price}}</p>
                        <p class="card-text font-weight-bold">Owner : {{$post->user->name}}</p>
                        <div class="">
                            {{-- <a href="{{ route('post.edit',['id' => $post->id]) }}" class="btn btn-success" style="width:100px">Edit</a> --}}
                            {{-- <a href="{{ route('post.delete',['id' => $post->id]) }}" class="btn btn-danger" style="width:100px">Delete</a> --}}

                            <form id="form_{{$post->id}}" action="{{ route('post.delete', $post->id) }}" method="GET">
                                    @csrf
                                    <a href="{{ route('post.edit',['id' => $post->id]) }}" class="btn btn-success" style="width:100px">Edit</a>
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-xs" onclick="confirmDelete('form_{{$post->id}}', '{{$post->title}}')" style="width:100px">Delete</button>
                            </form>
                        </div>


                    </div>

                </div>
        </div>

        @endforeach

    </div>


@endsection

@section('js')

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
