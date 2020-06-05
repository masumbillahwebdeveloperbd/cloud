@extends('layouts.admin')
@section('content')


<div class="container wrapper" style="padding:0px;margin-top:10px;">
	
	<div class="row">
		<div class="col-md-3 col-sm-3"></div>
		<div class="col-md-6 col-sm-6">
			<h2>Service</h2>
				
			{{Form::open(['route'=>['service-details.update',$data->id],'method'=>'PUT'])}}
				
			@if(Session::has('success'))
			      <div class="alert alert-success">
			      	{{Session::get('message')}}
			      	
			      </div>
			      @endif
				
				  <div class="form-group">
				    <label for="title">Title</label>
				       <select name="service_id" class="form-control" id="service_id">
				    	<option value="">Select</option>

				    	@foreach($serviceDatas as $serviceData )
				    	@if($data->service_id==$serviceData->id)
				    	<option value="{{$serviceData->id}}" selected>{{$serviceData->title}}</option>
				    	@else
				    	<option value="{{$serviceData->id}}">{{$serviceData->title}}</option>
				    	@endif

				    	@endforeach
				    	
				    	
				    </select>  
				  </div>
				  <div class="form-group">
				    <label for="sell_count">Sell Count</label>
				    <input type="number" class="form-control" id="sell_count" name="sell_count" value="{{$data->sell_count}}"> 
				  </div>
				  <div class="form-group">
				    <label for="rating">Rating</label>
				    <input type="number" class="form-control" id="rating" name="rating" value="{{$data->rating}}"> 
				  </div>
				  <div class="form-group">
				    <label for="details">Details</label>
				    
				    <textarea name="details" id="details" class="form-control" cols="30" rows="10">{{$data->details}}</textarea>
				  </div>
				  <div class="form-group">
				    <label for="price">Price</label>
				    <input type="number" class="form-control" value="{{$data->price}}" id="price" name="price"> 
				  </div>
				  
		

			
			
				  
				
				  <button type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Submit</button>
			 
				{{Form::close()}}

		</div>
		<div class="col-md-3 col-sm-3"></div>
	</div>
	
	
</div>


@endsection
