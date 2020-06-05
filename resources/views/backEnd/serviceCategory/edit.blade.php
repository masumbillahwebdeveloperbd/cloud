@extends('layouts.admin')
@section('content')


<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Service</h2>
				
			{{Form::open(['route'=>'service-category.store','action'=>'POST','files'=>'true'])}}
				
			
			      <div>@if(Session::has('success'))
			      	{{Session::get('message')}}
			      	@endif
			      </div>
				
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}">  
				  </div>	  
				
				  <button type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Update</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>

@endsection
