@extends('layouts.admin')
@section('content')

<div><a href="{{route('service-category.create')}}" class="" style="float:right; margin-right:20px;" >Add New</a></div>
<div style="margin-left:250px;">
<table class="table" >
  <thead>
    <tr>

      <th scope="col">#</th>
      
      <th scope="col">Name</th>
   
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach($datas as $data)
    <tr>
      <td scope="row">{{$data->id}}</td>
      
      <td>{{$data->name}}</td>
 
      <td>
        
        <a href="{{url('admin/service-category/'.$data->id.'/edit')}}" class="btn btn-primary" title="Edit"><i class="far fa-edit"></i></a>
        

     {{Form::open(['route'=>['service-category.destroy',$data->id],'method'=>'DELETE','files'=>'true','style'=>'display:inline-block'])}}
     <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
       
       {{Form::close()}}
     
     </td>
    </tr>
 @endforeach
   
    
  </tbody>
</table>
</div>


@endsection