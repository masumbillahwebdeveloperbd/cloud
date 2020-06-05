@extends('layouts.admin')
@section('content')

<div><a href="{{route('service-details.create')}}" class="" style="float:right; margin-right:20px;" >Add New</a></div>
<div style="margin-left:250px;">
<table class="table" >
  <thead>
    <tr>

      <th scope="col">#</th>
      
      <th scope="col">Title</th>
      <th scope="col">Sell Count</th>
      <th scope="col">Details</th>
      <th scope="col">Price</th>

      <th>Action</th>
    </tr>
  </thead>

     
  <tbody>
 @foreach($datas as $data)
    <tr>
      <td scope="row">{{$data->id}}</td>
      
      <td>{{$data->service_id}}</td>
      
      <td>{{$data->rating}}</td>
      <td>{{$data->details}}</td>
      <td>{{$data->price}}</td>

 
      
 
      <td>
        
        <a href="{{url('admin/service-details/'.$data->id.'/edit')}}" class="btn btn-primary" title="Edit"><i class="far fa-edit"></i></a>
        

     {{Form::open(['route'=>['service-details.destroy',$data->id],'method'=>'DELETE','style'=>'display:inline-block'])}}
     <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
       
       {{Form::close()}}
     
     </td>
    </tr>
 @endforeach
   
    
  </tbody>
</table>
</div>


@endsection