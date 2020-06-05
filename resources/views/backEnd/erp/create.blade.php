@extends('layouts.admin')
@section('content')


<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Erp</h2>
				
			{{Form::open(['route'=>'erp.store','action'=>'POST','files'=>'true'])}}
				
	       @if(Session::has('success'))
			      <div class="alert alert-success">
			      	{{Session::get('success')}}
			      	
			      </div>
			@endif
			
				 <div class="form-group">
				    <label for="title">Title</label>
				    <input type="text" class="form-control" name="title" id="title">  
				  </div>
				  <div class="form-group">
				    <label for="erp_description"> Description</label>
				     
				    <textarea class="form-control" name="erp_description" id="erp_description" cols="30" rows="10">
				    	
				    </textarea>
				       <script>
                        CKEDITOR.replace( 'erp_description' );
                </script>
				  </div>


				  <div class="form-group">
				    <label for="image">Image</label>
				    <input type="file" class="form-control" id="image" name="image"> 
				  </div>
				  <button type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Submit</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>

@endsection
