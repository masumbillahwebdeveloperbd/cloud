@extends('layouts.admin')
@section('content')
<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Curriculum</h2>
				
			{{Form::open(['route'=>['curriculum.update',$data->id],'method'=>'PUT'])}}
				
			
			      @if(Session::has('success'))
			      <div class="alert alert-success">
			      	{{Session::get('message')}}
			      </div>
			      	@endif
			      
				  <div class="form-group">
				    <label for="title">Course Name</label>
				       <select name="course_id" class="form-control" id="course_id">
				    	<option value="">Select</option>
				    


				    	@foreach($courseDatas as $courseData )
				    	@if($data->course_id==$courseData->id)
				    	<option value="{{$courseData->id}}" selected>{{$courseData->course_name}}</option>
				    	@else
				    	<option value="{{$courseData->id}}">{{$courseData->course_name}}</option>
				    	@endif

				    	@endforeach
				    	
			    </select>  
				  </div>
				  <div class="form-group">
				    <label for="title">Title</label>
				    <input type="title" class="form-control" id="title" name="title" value="{{$data->title}}"> 
				  </div>

				  <div class="form-group">
				    <label for="lecture_no">Lecture Number</label>
				    <input type="text" class="form-control" id="lecture_no" name="lecture_no" value="{{$data->lecture_no}}">  
				  </div>
				  <div class="form-group">
				    <label for="sub_title">Sub Title</label>
				       <select name="sub_title" class="form-control" id="sub_title">
				    	<option value="">Select</option>
				    	

                     @foreach($items as $item)
		      			@if($item->id==$data->sub_title)
				    	<option value="{{$item->id}}" selected>{{$item->title}}</option>
				    	@else
				    	<option value="{{$item->id}}">{{$item->title}}</option>
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
