@extends('layouts.admin')
@section('content')


<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Course</h2>
				
			{{Form::open(['route'=>'course-details.store','action'=>'POST','files'=>'true'])}}
			@if(Session::has('success'))
			      <div class="alert alert-success">
			      	{{Session::get('success')}}
			      	
			      </div>
				@endif
				  <div class="form-group">
				    <label for="title">Title</label>
				       <select name="course_id" class="form-control" id="course_id">
				    	<option value="">Select</option>
				    	@foreach($courseDatas as $courseData )
				    	<option value="{{$courseData->id}}">{{$courseData->course_name}}
				    	</option>
				    	@endforeach
				    	
				    </select>  
				  </div>
				
				  <div class="form-group">
				    <label for="cover_photo">Cover Photo</label>
				    <input type="file" class="form-control" id="cover_photo" name="cover_photo"> 
				  </div>
				    <div class="form-group">
				    <label for="video_link">Video</label>
				    
				    <input type="text" class="form-control" id="video_link" name="video_link">
				  </div>
			      <div class="form-group">
				    <label for="requirement">Requirement</label>
				    
				    <textarea name="requirement" id="requirement" class="form-control" cols="30" rows="10"></textarea>
				<script>
                        CKEDITOR.replace( 'requirement' );
                </script>
				  </div>
				  <div class="form-group">
				    <label for="include">Include</label>
				    
				    <textarea name="include" id="include" class="form-control" cols="30" rows="10"></textarea>
				    <script>
                        CKEDITOR.replace( 'include' );
                </script>
				  </div>
				  <div class="form-group">
				    <label for="course_objective">Course Objective</label>
				    
				    <textarea name="course_objective" id="course_objective" class="form-control" cols="30" rows="10"></textarea>
				        <script>
                        CKEDITOR.replace( 'course_objective' );
                </script>
				  </div>
				  <div class="form-group">
				    <label for="title">Author</label>
				       <select name="author_id" class="form-control" id="author_id">
				    	<option value="">Select</option>
				    	@foreach($authorDatas as $authorData )
				    	<option value="{{$authorData->id}}">{{$authorData->name}}</option>
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
