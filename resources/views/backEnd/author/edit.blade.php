@extends('layouts.admin')
@section('content')


<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Team Member</h2>
				
			{{Form::open(['route'=>['team.update',$data->id],'method'=>'PUT','files'=>'true'])}}
				
			
			
				<div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" name="name" id="name">  
				  </div>

				  <div class="form-group">
				    <label for="info">Information</label>
				    <input type="text" class="form-control" name="info" id="info">  
				  </div>

				   <div class="form-group">
				    <label for="address">Address</label> 
				    <textarea name="address" class="form-control" id="address" cols="30" rows="10">{{$data->address}}</textarea> 
				  </div>

				  <div class="form-group">
				    <label for="image">Image</label>
				    <input type="file" class="form-control" id="image" name="image"> 
				  </div>

				  <div class="form-group">
				    <label for="phone_number">Phone Number</label>
				    <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{$data->designation}}">  
				  </div>

				  <div class="form-group">
				    <label for="designation">Designation</label>
				    <input type="text" class="form-control" name="designation" id="designation" value="{{$data->designation}}">  
				  </div>
					  <div class="form-group">
				    <label for="facebook_link">Facebook Link</label>
				    <input type="text" class="form-control" name="facebook_link" id="facebook_link" value="{{$data->facebook_link}}">  
				  </div>
				   <div class="form-group">
				    <label for="twitter_link">Twitter Link</label>
				    <input type="text" class="form-control" name="twitter_link" id="twitter_link" value="{{$data->twitter_link}}">  
				  </div>
				   <div class="form-group">
				    <label for="linkedin_link">Linkedin Link</label>
				    <input type="text" class="form-control" name="linkedin_link" id="linkedin_link" value="{{$data->linkedin_link}}">  
				  </div>
				   <div class="form-group">
				    <label for="youtube_link">Youtube Link</label>
				    <input type="text" class="form-control" name="youtube_link" id="youtube_link" value="{{$data->youtube_link}}">  
				  </div>

				  <button type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Edit</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>

@endsection
