@extends('parent.master')

@section('title', 'Farmer - Manage Farmers')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection

@section('content')
<div class='container' style='margin-top:62px'>
    <div class="row justify-content-md-center">
        <div class="col-8">
                <table id="table" class="table table-striped table-bordered" style="width:100%; margin-top: 30px">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone number</th>
                                <th>Email</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @if ($user->user_type_id == '1')
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="{{route('admin_view',$user->id)}}"><button type="button" class="btn btn-primary">Detail</button></a>
                                        </td>
                                        <td>
                                            <form id="form_{{$user->id}}" action="{{ route('farmer_list.destroy', $user->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-xs" onclick="confirmDelete('form_{{$user->id}}', '{{$user->name}}')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Phone number</th>
                                <th>Email</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                </table>
        </div>
    </div>

</div>
@endsection

@section('js')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
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
                  swal(name + " has been deleted successfully.").then(function(){
                    document.getElementById(item_id).submit();
                  })
                } else {
                    swal("Cancelled Successfully");
                }
            });
      }
</script>
@endsection

@section('ready_script')
    $('#table').DataTable();
@endsection
