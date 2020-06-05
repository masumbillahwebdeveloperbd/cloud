@extends('layouts.admin')
@section('content')


<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Course</h2>
				
			{{Form::open(['route'=>'course.store','action'=>'POST','files'=>'true'])}}
				@if(Session::has('success'))
			      <div class="alert alert-success">
			      	{{Session::get('success')}}
			      	
			      </div>
				@endif
			 	  <div class="form-group">
				    <label for="course_category_id">Category Name</label>
				       <select name="course_category_id" class="form-control" id="course_category_id">
				    	<option value="">Select</option>
				    	
                        @foreach($courseCategoryDatas as $courseCategoryData )
				    	<option value="{{$courseCategoryData->id}}">{{$courseCategoryData->name}}</option>
				    	@endforeach
				    	
			    	</select>  
				  </div>
			    
				
				  <div class="form-group">
				    <label for="course_name">Course Name</label>
				    <input type="text" class="form-control" name="course_name" id="course_name">  
				  </div>
				  <div class="form-group">
				    <label for="image">Image</label>
				    <input type="file" class="form-control" id="image" name="image"> 
				  </div>
				  <div class="form-group">
				    <label for="price"> Price</label>
				    <input type="text" class="form-control" name="price" id="price">  
				  </div>
		

			
			
				  
				
				  <button type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Submit</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>

@endsection
