  @extends('layouts.app')
  @section('title','blog-details')
  @section('content')
    <!-- Page feature start -->
    <section class="page-feature">
      <div class="container text-center">
        <h2>Erp Details</h2>
        <div class="breadcrumb">
          <a href="home.html">Home</a>
          <span>/ Erp Details</span>
        </div>
      </div>
    </section>
    <!-- Page feature end -->

    <!-- Blog Posts section start -->
    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="single-blog-post">
              <figure class="feature-img">
                <img src="{{asset('erpImage/'.$erpDetails->image)}}" alt="">
              </figure>
              <div class="entry-content">
             
                <h3>{{$erpDetails->title}}</h3>
                <p>{!!$erpDetails->erp_description!!}</p>
              </div>
            </div>
      
   
          </div>
        </div>       
      </div>
    </section>   
@endsection