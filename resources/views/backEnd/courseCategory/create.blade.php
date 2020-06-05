@extends('layouts.admin')
@section('content')


<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Course Category</h2>
				
			{{Form::open(['route'=>'course-category.store','action'=>'POST','files'=>'true'])}}
				
			@if(Session::has('success'))
			      <div class="alert alert-success">
			      	{{Session::get('success')}}
			      	
			      </div>
				@endif
				
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" name="name" id="name">  
				  </div>

				  <div class="form-group">
				    <label for="sub_category">Sub Category</label>
				    
				    <select class="form-control" name="sub_category" id="sub_category">
				    	<option value="">Select</option>
				    	
                          @foreach($items as $item)
		      			<option value="{{$item->id}}">
		      				{{$item->name}}
		      			</option>
      					@endforeach
				    </select> 
				    
				  </div>	  
				
				  <button type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Save</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>

@endsection
