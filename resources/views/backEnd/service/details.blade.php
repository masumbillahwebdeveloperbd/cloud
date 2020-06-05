
@extends('layouts.admin')
@section('content')
<div style="margin-left:250px;width:800px;">
<table class="table table-bordered table-hover">
	<tr>
		<th>Title</th>
		<th>{{$data->title}}</td>
	</tr>


	<tr>
		<th>Image</th>
		<th><img src="{{asset('serviceImages/'.$data->image)}}"  alt="" width="200" height="150"></td>
	</tr>

	
	<tr><th colspan="2"><a href="{{route('service.index')}}"><button class="btn btn-info">Back</button>  </a></th></tr>
	
</table>
</div>

@endsection






