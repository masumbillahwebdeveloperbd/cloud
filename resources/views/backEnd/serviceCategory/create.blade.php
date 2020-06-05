@extends('layouts.admin')
@section('content')


<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Service</h2>
				
			{{Form::open(['route'=>'service-category.store','action'=>'POST','files'=>'true'])}}
				
			@if(Session::has('success'))
			      <div class="alert alert-success">
			      	{{Session::get('success')}}
			      	
			      </div>
				@endif
				
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" name="name" id="name">  
				  </div>	  
				
				  <button type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Submit</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>

@endsection
