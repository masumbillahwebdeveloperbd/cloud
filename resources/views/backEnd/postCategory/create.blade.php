@extends('layouts.admin')
@section('content')
<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Post Category</h2>
				
			{{Form::open(['route'=>'post-category.store','method'=>'POST'])}}
				
			@if(Session::has('success'))
			      <div class="alert alert-success">
			      	{{Session::get('success')}}
			      	
			      </div>
				@endif
			
				  <div class="form-group">
				    <label for="title">Name</label>
				    <input type="text" class="form-control" id="name" name="name"> 
				  </div>
				
				  <div class="form-group">
				    <label for="sub_title">Sub Category</label>
				       <select name="sub_category" class="form-control" id="sub_category">
				    	<option value="">Select</option>
				    	
                          @foreach($items as $item)
		      			<option value="{{$item->id}}">
		      				{{$item->name}}
		      			</option>
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
