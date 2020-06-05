@extends('layouts.admin')
@section('content')

<div><a href="{{route('course.create')}}" class="" style="float:right; margin-right:20px;" >Add New</a></div>
<div style="margin-left:250px;">
<table class="table" >
  <thead>
    <tr>

      <th scope="col">SL</th>
      
      <th scope="col">Course Name</th>
      <th scope="col">Category Name</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>


      <th>Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach($datas as $data)
    <tr>
      <td scope="row">{{$data->id}}</td>
      
      <td>{{$data->course_name}}</td>
      <td>{{$data->category->name}}</td>
      
      <td><img src="{{asset('courseImages/'.$data->image)}}"  alt="" width="100" height="100"></td>

      <td>{{$data->price}}</td>
      <td>
        
        <a href="{{url('admin/course/'.$data->id.'/edit')}}" class="btn btn-primary" title="Edit"><i class="far fa-edit"></i></a>

     {{Form::open(['route'=>['course.destroy',$data->id],'method'=>'DELETE','files'=>'true','style'=>'display:inline-block'])}}
     <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
       
       {{Form::close()}}
     
     </td>
    </tr>
 @endforeach
   
    
  </tbody>
</table>
</div>


@endsection