@extends('layouts.app')
@section('title',"course_details")
@section('content')
 <!-- Page feature start -->
    <section class="page-feature">
      <div class="container text-center">
        <h2>Course details</h2>
        <div class="breadcrumb">
          <a href="home.html">Home</a>
          <span>/ Course details</span>

        </div>
      </div>
    </section>
    <!-- Page feature end -->

    <!-- Course Details section start -->
    <section class="course-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="course-preview">
              <img src="" alt="">
              <a href="#" class="preview-btn"><i class="ti-control-play"></i></a>
            </div>
            <div class="course-content">
              <h3> <span class="badge"><i class="ti-tag"></i>New</span></h3>
              <p>
              {{$courseDetail->course_name}}</p>
              <div class="details">
              <span>By <a href="#">{{$courseDetail->authorName}}</a></span>
             </div>
            </div>

            <div class="course-curriculum">
              <ul class="nav nav-tabs">
                <li><a class="active" data-toggle="tab" href="#overview">Overview</a></li>
                <li><a data-toggle="tab" href="#curriculum">Curriculum</a></li>
                <li><a data-toggle="tab" href="#courseObj">Course Objective</a></li>
              </ul>
              
              <div class="tab-content">
                <div id="overview" class="tab-pane fade in show active">
                  <h4 class="tab-title">This course includes</h4>
               
                  <p>{!!$courseDetail->include!!}</p>
              
                  
                  <h4 class="tab-title">Requirements for this course</h4>
                 <p>{!!$courseDetail->requirement!!}</p>
                </div>
                <div id="curriculum" class="tab-pane fade">
                  <div class="accordion" id="accordion">
                    @foreach(DB::table('curriculums')->whereNull('sub_title')
                    ->get() as $item)
                    <div class="accordion-item">

     <h5 class="collapsed" data-toggle="collapse" data-target="#acpan2" aria-expanded="false">
                        {{$item->title}}
                         
                        <span>{{$item->lecture_no}}</span>
                      </h5>

                  

                      <div id="acpan2" class="collapse" data-parent="#accordion">
                        <div class="acr-body">
                          <ul>
                      @foreach(DB::table('curriculums')->where('sub_title',$item->id)
                    ->get() as $data)
                        <li><a href="#"><i class="ti-control-play"></i>{{$data->title}}</a></li>

                        @endforeach
                           
                          </ul>
                        </div>
                      </div>


                    
                    </div>
                    @endforeach
                    <div class="accordion-item">
                     
                       
                    </div>
                  </div>
                </div>
                <div id="courseObj" class="tab-pane fade">
                  <p>{!!$courseDetail->course_objective!!}</p>
               
                </div>
              </div>
            </div>  
          </div>
          <div class="col-lg-4">
            <aside class="sidebar">
              <div class="widget buy-course">
                <p class="price"><strong>Tk. {{$courseDetail->price}}</strong><span>{{$courseDetail->price+500}}</span></p>
                
                
              </div>
              <div class="widget instractors">
                  <figure>
                    <img src="images/avatar-small.png" alt="" class="avatar-md circle">
                  </figure>
                  <h4>{{$courseDetail->authorName}}</h4>
                  <span>{{$courseDetail->designation}}</span>
                  <!-- <span class="total-courses"><i class="ti-user"></i> 09 Courses</span> -->
                  <div class="socials">
                    <a href="#" class="facebook"><i class="ti-facebook"></i></a>
                    <a href="#" class="twitter"><i class="ti-twitter-alt"></i></a>
                    <a href="#" class="linkedin"><i class="ti-linkedin"></i></a>
                    <a href="#" class="youtube"><i class="ti-youtube"></i></a>
                  </div>  
              </div>
              <div class="widget categories">
                <h3 class="widget-title">Categories</h3>
                <ul>
                  <li><a href="#">{{$courseDetail->coureseCategoryName}}</a></li>
                  
                </ul>
              </div>
              
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!-- Courses Details section end -->
    @endsection