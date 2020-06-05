@extends('layouts.admin')
@section('content')

<div><a href="{{route('team.create')}}" class="" style="float:right; margin-right:20px;" >Add New</a></div>
<div style="margin-left:250px;">
<table class="table" >
  <thead>
    <tr>

      <th scope="col">#</th>
      
      <th scope="col">Name</th>
      <th scope="col">Information</th>
      <th scope="col">Address</th>
      <th scope="col">Image</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Designation</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach($datas as $data)
    <tr>
      <td scope="row">{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->info}}</td>
      <td>{!!$data->address!!}</td>
      <td><img src="{{asset('teamImages/'.$data->image)}}"  alt="" width="100" height="100"></td>

      <td>{{$data->phone_number}}</td>
      <td>{{$data->designation}}</td>
      


 
       
 
      <td>
        
        <a href="{{url('admin/team/'.$data->id.'/edit')}}" class="btn btn-primary" title="Edit"><i class="far fa-edit"></i></a>

     {{Form::open(['route'=>['team.destroy',$data->id],'method'=>'DELETE','files'=>'true','style'=>'display:inline-block'])}}
     <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
       
       {{Form::close()}}
     
     </td>
    </tr>
 @endforeach
   
    
  </tbody>
</table>
</div>


@endsection