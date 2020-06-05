@extends('layouts.admin')
@section('content')

<div><a href="{{route('event.create')}}" class="" style="float:right; margin-right:20px;" >Add New</a></div>
<div style="margin-left:250px;">
<table class="table" >
  <thead>
    <tr>

      <th scope="col">#</th>
      
      <th scope="col">Date</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">image</th>



      <th>Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach($datas as $data)
    <tr>
      <td scope="row">{{$data->id}}</td>
      
      <td>{{$data->date}}</td>
      <td>{{$data->title}}</td>
      <td>{!!$data->description!!}</td>
      
      <td><img src="{{asset('eventImage/'.$data->image)}}"  alt="" width="100" height="100"></td>

      

 
       
 
      <td>
        
        <a href="{{url('admin/event/'.$data->id.'/edit')}}" class="btn btn-primary" title="Edit"><i class="far fa-edit"></i></a>

     {{Form::open(['route'=>['event.destroy',$data->id],'method'=>'DELETE','files'=>'true','style'=>'display:inline-block'])}}
     <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
       
       {{Form::close()}}
     
     </td>
    </tr>
 @endforeach
   
    
  </tbody>
</table>
</div>


@endsection