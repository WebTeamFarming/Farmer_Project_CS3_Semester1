@extends('layouts.master')

@section('title','Admin Edite')

@section('style')
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@endsection
@section('image_slider')<br><br><br><br>
<br>
	<div class="container">
		<button type="button" class="btn btn-outline-success">Edite Profile</button>
		<button type="button" class="btn btn-outline-danger">Delete Profile</button><br><br>
	  <div class="row">
	    <div class="col-8">
	    	Company Name: <div> </div><br>
	    	Phone: <div> </div><br>
	    	Email: <div> </div><br>
            Address: <div> </div><br>
            Additional Infromation: <div> </div><br>
	    </div>
	    <div class="col-4"><br>
	    	<div class="card" style="width: 18rem;">
			  <img src="https://www.popsci.com/sites/popsci.com/files/styles/1000_1x_/public/images/2018/06/20150919-k29a9681_preview.jpeg?itok=XcGelGvE&fc=50,50" class="card-img-top" alt="...">
			</div>
	    </div>
	  </div>
	</div>
    <br><br>
@endsection
@section('footer')
    @parent
@endsection