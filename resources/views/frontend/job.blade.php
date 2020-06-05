 @extends('layouts.app')
    @section('title','event-Details')
    @section('content')

    <!-- Page feature start -->
    <section class="page-feature">
      <div class="container text-center">
        <h2>Job Details</h2>
        <div class="breadcrumb">
          <a href="home.html">Home</a>
          <span>/ Job Details</span>
        </div>
      </div>
    </section>
    <!-- Page feature end -->

    <!-- Events section start -->
    <section class="events-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            
            <div class="event-item">
              
              <div class="e-content">
                @foreach($jobs as $job)
                <h3>{{$job->title}}</h3>
                <p>{!!$job->description!!}</p>
                @endforeach
              </div>
            </div>
                   
          </div>
        </div>        
      </div>
    </section>
    <!-- Events section end -->
    @endsection
    
  