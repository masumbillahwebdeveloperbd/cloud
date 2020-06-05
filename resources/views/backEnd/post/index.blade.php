@extends('layouts.admin')
@section('content')
<div><a href="{{route('post.create')}}" class="" style="float:right; margin-right:20px;" >Add New</a></div>
<div style="margin-left:250px;">
<table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Post Category Name</th>
      <th scope="col">Details</th>
      <th scope="col">User Name</th>
      <th>Action</th>
    </tr>
  </thead>    
  <tbody>
 @foreach($datas as $data)
    <tr>
      <td scope="row">{{$data->id}}</td>
      <td>{{$data->title}}</td>
      <td><img src="{{asset('postImages/'.$data->image)}}"  alt="" width="100" height="100"></td>
      <td>{{$data->category->name}}</td>
      <td>{{$data->details}}</td>
      <td>{{$data->user->name}}</td>
      
      <td>
        
        <a href="{{url('admin/post/'.$data->id.'/edit')}}" class="btn btn-primary" title="Edit"><i class="far fa-edit"></i></a>
        

     {{Form::open(['route'=>['post.destroy',$data->id],'method'=>'DELETE','style'=>'display:inline-block'])}}
     <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
       
       {{Form::close()}}
     
     </td>
    </tr>
 @endforeach
   
    
  </tbody>
</table>
</div>


@endsection