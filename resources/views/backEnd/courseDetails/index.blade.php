@extends('layouts.admin')
@section('content')

<div><a href="{{route('course-details.create')}}" class="" style="float:right; margin-right:20px;" >Add New</a></div>
<div style="margin-left:250px;">
<table class="table" >
  <thead>
    <tr>

      <th scope="col">SL</th>
      <th scope="col">Course Name</th>
      <th scope="col">Cover Photo</th>
      <th scope="col">Video</th>
      <th scope="col">Requirement</th>
      <th scope="col">Include</th>
      <th scope="col">Course Objective</th>
      <th scope="col">Author Name</th>



      <th>Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach($datas as $data)
    <tr>
      <td scope="row">{{$data->id}}</td>
      <td>{{$data->course_id}}</td>
      <td><img src="{{asset('courseDetailImages/'.$data->cover_photo)}}"  alt="" width="100" height="100"></td>

      
      <td>{{$data->video_link}}</td>
      <td>{!!$data->requirement!!}</td>
      <td>{!!$data->include!!}</td>
      <td>{!!$data->course_objective!!}</td>
      <td>{{$data->author_id}}</td>




      <td>
        <a href="{{url('admin/course-details/'.$data->id.'/edit')}}" class="btn btn-primary" title="Edit"><i class="far fa-edit"></i></a>
     {{Form::open(['route'=>['course-details.destroy',$data->id],'method'=>'DELETE','files'=>'true','style'=>'display:inline-block'])}}
     <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
       
       {{Form::close()}}
     
     </td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>


@endsection