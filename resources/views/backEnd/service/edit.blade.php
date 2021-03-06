@extends('layouts.admin')
@section('content')


<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Service</h2>
				
			{{Form::open(['route'=>['service.update',$data->id],'method'=>'PUT','files'=>'true'])}}
				
			
			
				
				  <div class="form-group">
				    <label for="title">Title</label>
				    <input type="text" class="form-control" name="title" id="title" value="{{$data->title}}">  
				  </div>
				  <div class="form-group">
				    <label for="image">Image</label>
				    <input type="file" class="form-control" id="image" name="image"> 
				  </div>
		

			
			
				  
				
				  <button type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Edit</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>

@endsection
