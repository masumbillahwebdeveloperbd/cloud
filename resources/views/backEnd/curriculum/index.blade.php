@extends('layouts.admin')
@section('content')

<div><a href="{{route('curriculum.create')}}" class="" style="float:right; margin-right:20px;" >Add New</a></div>
<div style="margin-left:250px;">
<table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course Name</th>
      <th scope="col">Title</th>
      <th scope="col">Lecture Number</th>
      <th scope="col">Sub Title</th>
      <th>Action</th>
    </tr>
  </thead>    
  <tbody>
 @foreach($datas as $data)
    <tr>
      <td scope="row">{{$data->id}}</td>
      <td>{{$data->course_id}}</td>
      <td>{{$data->title}}</td>
      <td>{{$data->lecture_no}}</td>
      <td>{{$data->sub_title}}</td>
      <td>
        
        <a href="{{url('admin/curriculum/'.$data->id.'/edit')}}" class="btn btn-primary" title="Edit"><i class="far fa-edit"></i></a>
        

     {{Form::open(['route'=>['curriculum.destroy',$data->id],'method'=>'DELETE','style'=>'display:inline-block'])}}
     <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
       
       {{Form::close()}}
     
     </td>
    </tr>
 @endforeach
   
    
  </tbody>
</table>
</div>


@endsection