@extends('layouts.master')

@section('title','Tool Store')
@section('style')
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@endsection

@section('image_slider')<br><br><br>
    <div class="container">
		<div class="dropdown">
		  <button class="btn btn-secondary dropdown-toggle" style="width: 20%;text-align: center;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    All
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		    <a class="dropdown-item" href="#">Action</a>
		    <a class="dropdown-item" href="#">Another action</a>
		    <a class="dropdown-item" href="#">Something else here</a>
		  </div>
		</div><br>

		<div class="card-deck">
		  <div class="card">
		    <img src="http://4.bp.blogspot.com/-IKFqt2n_fSA/ViSSx5htdjI/AAAAAAAACog/9vHNffhG3XM/s1600/Farmer2.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		      <a href="#" class="btn btn-primary">Detail</a>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
		  </div>

		  <div class="card">
		    <img src="http://4.bp.blogspot.com/-IKFqt2n_fSA/ViSSx5htdjI/AAAAAAAACog/9vHNffhG3XM/s1600/Farmer2.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		      <a href="#" class="btn btn-primary">Detail</a>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
		  </div>

		  <div class="card">
		    <img src="http://4.bp.blogspot.com/-IKFqt2n_fSA/ViSSx5htdjI/AAAAAAAACog/9vHNffhG3XM/s1600/Farmer2.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
		      <a href="#" class="btn btn-primary">Detail</a>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
  		  </div>
		</div>
	</div>
@endsection


@section('footer')
    @parent
@endsection
