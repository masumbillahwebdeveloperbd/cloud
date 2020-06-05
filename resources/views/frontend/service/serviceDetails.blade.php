@extends('layouts.app')
@section('title',"service_details")
@section('content')
 <!-- Page feature start -->
    <section class="page-feature">
      <div class="container text-center">
        <h2>Service details</h2>
        <div class="breadcrumb">
          <a href="home.html">Home</a>
          <span>/ Service details</span>
        </div>
      </div>
    </section>
    <!-- Page feature end -->

    <!-- Course Details section start -->
    <section class="course-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="course-content">
             <div class="row">
              <div class="col-lg-8">

              <h3>{{$service->title}} <span class="badge"><i class="ti-tag"></i>Hot & new</span></h3>
             
              <div class="details">
                
                <div class="ratings">
                  @for ($i = 0; $i < $serviceDetail->rating; $i++)
                  <a href="#"><i class="ti-star"></i></a>
                   @endfor
                </div>                
              </div>
       </div>
       <div class="col-lg-4">
         <h4>Offer Price:{{$serviceDetail->price}}Tk</h4>

       </div>
    </div>
      </div>
            <div class="course-curriculum">
               <div class="tab-content">
                <div id="overview" class="tab-pane fade in show active">
                 <h4 class="tab-title">Description</h4>
                  <p>{{$serviceDetail->details}} </p>  
                </div>
              </div>
            </div>            
          </div>
       
        </div>
      </div>
    </section>
    <!-- Courses Details section end -->
    @endsection