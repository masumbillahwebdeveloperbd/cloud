 @extends('layouts.app')
@section('title',"Home")
@section('content')

<script>
obj1=new XMLHttpRequest();

function findByAjax(searchText)
{
  obj1.open("GET", 'http://localhost:8000/course-search/'+searchText);
  obj1.onreadystatechange=function(){  
  if(obj1.readyState==4 && obj1.status==200){     
  document.getElementById('divId').innerHTML=obj1.responseText;

}   
  }
  obj1.send(null);
}
</script>
<!-- Page feature start -->
    <section class="page-feature">
      <div class="container text-center">
        <h2>Courses</h2>
        <div class="breadcrumb">
          <a href="home.html">Home</a>
          <span>/ Courses</span>
        </div>
      </div>
    </section>
    <!-- Page feature end -->

    <!-- Main form start -->
    <section class="main-form pb-0">
      <div class="container">
        <div class="m-search-form">
          <form action="#">
            <input type="text" id="searchText" placeholder="Enter a Subject">
            <button onclick="findByAjax(document.getElementById('searchText').value);" >Find now</button>
            
          </form>
        </div>
      </div>
    </section>
    <!-- Main form end -->



 <!-- Courses section start -->
    <section class="courses">
      <div class="container">
        <div class="row" id="divId">

        @foreach($courseNames as $courseName)
          <div class="col-lg-4 col-md-6">
            <div class="single-course">
              <figure class="course-thumb">
                <img src="{{asset('courseImages/'.$courseName->image)}}" alt="">
                <strong class="ribbon">{{$courseName->price}}</strong>
              </figure>
              <div class="course-content">
                <p style="margin-left:100px; font-size:30px; ">{{$courseName->course_name}}</p>
                <p>

                </p>
                <div class="enroll">
           
                  <div class="course-meta text-right">
                    <!-- <strong class="course-price">$29.00</strong> -->
                    <a href="{{url('/course-details/'.$courseName->id)}}" class="btn btn-filled">Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

       @endforeach
        </div>
        <div class="pagination">
          <!-- <a href="$">prev</a> -->
          <span class="current-page">1</span>
          <a href="%24.html">2</a>
          <a href="%24.html">3</a>
          <a href="%24.html">4</a>
          <a href="%24.html">Next</a>
        </div>
      </div>
    </section>
    <!-- Courses section end -->

    @endsection