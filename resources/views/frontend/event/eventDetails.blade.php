 @extends('layouts.app')
    @section('title','event-Details')
    @section('content')

    <!-- Page feature start -->
    <section class="page-feature">
      <div class="container text-center">
        <h2>Events Details</h2>
        <div class="breadcrumb">
          <a href="home.html">Home</a>
          <span>/ Events Details</span>
        </div>
      </div>
    </section>
    <!-- Page feature end -->

    <!-- Events section start -->
    <section class="events-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <figure class="feature-img">
              <img src="{{asset('eventImage/'.$data->image)}}" 
              alt="">
            </figure>
            <div class="event-item">
              
              <div class="e-content">
                <div class="meta-tags">
                  
                  <span class="pl-3"><i class="ti-calendar"></i>{{$data->date}}</span>
                </div>                
                <h3>{{$data->title}}</h3>
                <p>{!!$data->description!!}</p>
              </div>
            </div>
                   
          </div>
        </div>        
      </div>
    </section>
    <!-- Events section end -->
    @endsection
    
  