 @extends('layouts.app')
@section('title',"Home")
@section('content')

<!-- Page feature start -->
    <section class="page-feature">
      <div class="container text-center">
        <h2>Service</h2>
        <div class="breadcrumb">
          <a href="home.html">Home</a>
          <span>/ Service</span>
        </div>
      </div>
    </section>
    <!-- Page feature end -->

    <!-- Main form start -->
    <section class="main-form pb-0">
      <div class="container">
        <div class="m-search-form">
          <form action="#">
            <input type="text" placeholder="Enter a Subject">
            <button type="submit">Find now</button>
          </form>
        </div>
      </div>
    </section>
    <!-- Main form end -->

 <!-- Courses section start -->
    <section class="courses">
      <div class="container">
        <div class="row">
          @foreach($serviceNames as $serviceName)
          <div class="col-lg-4 col-md-6">
            
            <div class="single-course">
              <figure class="course-thumb">
                <img src="{{asset('serviceImages/'.$serviceName->image)}}" alt="masum">  
              </figure>
              <div class="course-content">
                <h3><a href="{{url('/service-details/'.$serviceName->id)}}">{{$serviceName->title}}</a></h3>
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