@extends('layouts.master')

@section('title','Edite Farmer Profile')
@section('image_slider')<br><br><br><br>

    <div class="container">
		<form>
		  <div class="form-group row">
		    <label for="inputName" class="col-sm-2 col-form-label">Name:</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="inputName" placeholder="Name">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="inputPhone" class="col-sm-2 col-form-label">Phone Number: </label>
		    <div class="col-sm-10">
		      <input type="phone" class="form-control" id="phone" placeholder="Your Phone Number">
		    </div>
		  </div> 
		  <div class="form-group row">
		      <legend class="col-form-label col-sm-2 pt-0">Gender:</legend>
		      <div class="col-sm-10">
		          <input class="" type="radio" name="Gender" id="Gender" value="Male" checked>
		          <label class="form-check-label" for="Male">
		            Male
		          </label>
		          <input class="" type="radio" name="Gender" id="Gender" value="Female">
		          <label class="form-check-label" for="Gender">
		            Female
		          </label>
		   	  </div>
		   </div>
		   <div class="form-group row">
		    <label for="inputAddress" class="col-sm-2 col-form-label">Address: </label>
		    <div class="col-sm-10">
		      <input type="Address" class="form-control" id="Address" placeholder="Your Address">
		    </div>
		  </div> 
		  <div class="form-group row">
		    <label for="inputPhone" class="col-sm-2 col-form-label">Profile Photo: </label>
		    <div class="col-sm-10">
		      <input type="Profile" class="form-control" id="Profile" placeholder="Your Profile">
		    </div>
		  </div> 
		  <div class="form-group row">
		    <label for="inputPhone" class="col-sm-2 col-form-label">Description: </label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="Description" placeholder="Your Description">
		    </div>
		  </div> 
		</form>
		<button type="button" class="btn btn-outline-success">Save</button>
		<button type="button" class="btn btn-outline-danger">Cancel</button>
	</div><br><br>
@endsection
@section('footer')
    @parent
@endsection