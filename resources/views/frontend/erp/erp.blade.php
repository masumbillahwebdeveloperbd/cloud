@extends('layouts.app')
@section('title',"Home")
@section('content')

<!-- Page feature start -->
    <section class="page-feature">
      <div class="container text-center">
        <h2>Erp</h2>
        <div class="breadcrumb">
          <a href="home.html">Home</a>
          <span>/ Erp</span>
        </div>
      </div>
    </section>
    <!-- Page feature end -->
 <!-- Courses section start -->
    <section class="courses">
      <div class="container">
        <div class="row" id="divId">
        @foreach($erpNames as $erpName)
          <div class="col-lg-4 col-md-6">
            <div class="single-course">
              <figure class="course-thumb">
                <img src="{{asset('erpImage/'.$erpName->image)}}" alt="">
              </figure>
              <div class="course-content">
                <p style="margin-left:100px; font-size:30px; ">{{$erpName->title}}</p>
                <p>

                </p>
                <div class="enroll">
           
                  <div class="course-meta text-right">
                    <!-- <strong class="course-price">$29.00</strong> -->
                    <a href="{{url('/erp-details/'.$erpName->id)}}" class="btn btn-filled">Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

       @endforeach
        </div>
      </div>
    </section>
    <!-- Courses section end -->
 @endsection