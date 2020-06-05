@extends('layouts.admin')
@section('content')
<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Post</h2>
				
			{{Form::open(['route'=>['post.update',$data->id],'method'=>'PUT','files'=>'true'])}}
				
			
			      @if(Session::has('success'))
			      <div class="alert alert-success">
			      	{{Session::get('message')}}
			      </div>
			      	@endif

			      <div class="form-group">
				    <label for="title">Title</label>
				    <input type="title" class="form-control" id="title" name="title" value="{{$data->title}}"> 
				  </div>
				  <div class="form-group">
				    <label for="image">Image</label>
				    <input type="file" class="form-control" id="image" name="image"> 
				  </div>
			      
				  <div class="form-group">
				    <label for="title">Category Name</label>
				       <select name="category_id" class="form-control" id="category_id">
				    	<option value="">Select</option>
				   



				    	@foreach($categoryDatas as $categoryData )
				    	@if($data->category_id==$categoryData->id)
				    	<option value="{{$categoryData->id}}" selected>{{$categoryData->name}}</option>
				    	@else
				    	<option value="{{$categoryData->id}}">{{$categoryData->name}}</option>
				    	@endif

				    	@endforeach
				    	
			    	</select>  
				  </div>
				
				  <div class="form-group">
				    <label for="lecture">Details</label>
				    
				    <textarea name="details" id="details" class="form-control" cols="30" rows="10">{{$data->details}}</textarea>
				  </div>

				  <div class="form-group">
				    <label for="title">User Name</label>
				       <select name="user_id" class="form-control" id="user_id">
				    	<option value="">Select</option>
				    	
                      
				    	@foreach($userDatas as $userData )
				    	@if($data->user_id==$userData->id)
				    	<option value="{{$userData->id}}" selected>{{$userData->name}}</option>
				    	@else
				    	<option value="{{$userData->id}}">{{$userData->name}}</option>
				    	@endif

				    	@endforeach
				    	
			    	</select>  
				  </div>
			

				  <button type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Submit</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>

@endsection
