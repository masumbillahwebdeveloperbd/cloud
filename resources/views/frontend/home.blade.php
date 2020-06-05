  
@extends('layouts.app')
@section('title',"Homes")
@section('content')

    <!-- Banner start -->
    <section class="banner ban-02">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="banner-content">
              <h2><span>Inspiration!</span> Gears up Innovation</h2>
              
              
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <form action="appointment-mail" method="post" class="form trial-form ml-md-auto">
              @csrf
              <h3 class="form-title">Get Admission Apointment now</h3>
              <input type="text" name="name" placeholder="Your Name">
              <input type="email" name="email" placeholder="Your Email">
              <input type="text" name="phone" placeholder="Your Phone">
              <button type="submit" class="btn btn-filled">Request Apointment</button>
            </form>            
          </div>
        </div>
      </div>
    </section>
    <!-- Banner start -->

    <div class="featureBox boxed">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="sfBox" style="width:347px;height:158px;">
              <i class="fas fa-drafting-compass"></i>
              <strong>{{$courses->count()}} Online  courses</strong>
              <span>Explore a variety of fresh topics</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="sfBox" style="width:347px;height:158px;>
              <i class="far fa-user-circle"></i>
              <strong>Instant Expert instruction</strong>
              <span>Find the right instructor for you</span>
            </div>
          </div>
          <div class="col-md-4" >
            <div class="sfBox" style="width:347px;height:158px;>
              <i class="fas fa-history"></i>
              <strong>Lifetime course access</strong>
              <span>Learn on your schedule anytime</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Categories sectiion start -->
    <section class="categories bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <span class="tagline">Top Services</span>
              <h3 class="sec-title">Pick the right service.</h3>
            </div>
          </div>        
        </div>
        <div class="row">
          @foreach($services as $service)
          <div class="col-md-4 col-sm-6">
            <a href="#" class="icon-list-block">
              <img src="images/icons/categories/1.png" alt="">              
              <span>{{$service->title}}</span>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- Categories sectiion end -->

    <!-- Feature section start -->
    <section class="feature">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="iconBox">
              <img src="images/icons/1.png" alt="" class="img-icon">
              <h5><a href="{{url('erp')}}">Worldwide Service</a></h5>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="iconBox">
              <img src="images/icons/2.png" alt="" class="img-icon">
              <h5><a href="{{url('trainers')}}">Qualified Trainers</a></h5>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="iconBox">
              <img src="images/icons/3.png" alt="" class="img-icon">
              <h5><a href="{{url('jobOppurtunity')}}">Job Opportunity</a></h5>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Feature section end -->

    <!-- About section start -->
    <section class="about bg-light">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <span class="tagline" class="display-1"></span>
              <h3 class="sec-title">About us</h3>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-md-6">
            <div class="entry-content-fluid ml-auto">
                
         <p style="text-align: justify;">
            CloudIcon InfoTech is one of the best software & cloud development companies in Bangladesh. This company mainly deals with software, server as well as network related services. We are group of cloud & Network experts, website designers, Software engineers, Web developers, web application specialist, and database management administrators. Our aim is to provide the qualitative, innovative, elegant, creative server and software solutions and data services to our valued customers.
         </p>
               
<p style="text-align: justify;">
  CloudIcon has started our journey with the aim of providing the best server & software oriented services as well as producing world class experts in the field of Cloud and Software skilled personnel in the area of ICT market and hence in the long run we will be the number one IT solution provider in Bangladesh as well as in abroad.

  We also make experts by training regarding to the specific field such as cloud computing, software development, server administration, android application development, database management etc.

  As a dynamic company we are well connected with several data center providers worldwide for promoting, and servicing their products in the world market.
</p>


    </div>
  </div>
<div class="col-md-6 nopadd-right">
            <div class="video-box">
              <img src="images/video-bg.jpg" alt="">
              <a href="#" class="video-btn"><img src="images/youtube.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About section end -->

    <!-- Events section start -->
    <section class="events">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <span class="tagline">Latest Events</span>
              <h3 class="sec-title">Community affairs and integrated events</h3>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-6">
            <figure class="event-img-big">
              <img src="images/event.jpg" class="rounded image" alt="">
            </figure>
          </div>
          <div class="col-lg-6">
          @foreach($events as $event)
            <div class="event-item">
              <div class="e-date rounded">

               
               {{ $event->date}}
            
              <span>Sep</span></div>
              <div class="e-content">
                <span class="e-time"><i class="ti-timer"></i> 2pm to 5pm</span>
                <h3><a href="event-details.html">{{$event->title}}</a></h3>
                <p>{!!$event->description!!}</p>
              </div>
            </div>
           @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- Events section end -->

    <!-- Testimonial section start -->
    <section class="testimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <span class="tagline text-white">Testimonials</span>
              <h3 class="sec-title text-white">What Our Users Say About Us</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 col-md-12 m-auto">
            <div class="testimonialBox">
              <span class="quote-sign"><i class="ti-quote-left"></i></span>
              <div class="test-caro owl-carousel" data-slider-id="1">
                <div class="single-testimonial">                  
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore eco dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                  <div class="testimonial-user">
                    <img src="images/avatar-small.png" class="avatar-small circle" alt="">
                    <strong>Masum</strong>
                  </div>
                </div>
                <div class="single-testimonial">
                  <p>Ypsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore eco dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                  <div class="testimonial-user">
                    <img src="images/avatar-small.png" class="avatar-small circle" alt="">
                    <strong>Linda heiday</strong>
                  </div>
                </div>
                <div class="single-testimonial">
                  <p>Qonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore eco dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                  <div class="testimonial-user">
                    <img src="images/avatar-small.png" class="avatar-small circle" alt="">
                    <strong>Anna Gunn</strong>
                  </div>
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial section end -->

    <!-- Funfacts start -->
    <section class="funfacts">
      <div class="container">
        <ul>
          <li>
            <span>{{$courses->count()}}</span>
            <p>Amazing Courses</p>
          </li>
          <li>
            <span>{{$authors->count()}}</span>
            <p>talented instructors</p>
          </li>
          <li>
            <span>3940</span>
            <p>Skilled Students</p>
          </li>
          <li>
            <span>14</span>
            <p>categories</p>
          </li>
        </ul>
      </div>
    </section>
    <!-- Funfacts end -->

    <!-- Blog section start -->
    <section class="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <span class="tagline">What’s new</span>
              <h3 class="sec-title">Every Single Update From <br>Our Blog Page</h3>
            </div>
          </div>
        </div>
        <div class="row">

          @foreach($posts as $post)
          <div class="col-lg-4 col-md-6">
            <div class="post-item">
              <img src="images/post/1.jpg" alt="">
              <div class="post-content">
                <div class="meta-tags">
                  <a href="#" class="post-meta category">{{$post->userName}}
                  </a> | <a href="#" class="post-meta date">{{$post->created_at}}</a>
                </div>
                <h3 class="post-title"><a href="{{url('blog-details/'.$post->id)}}">{{$post->title}}</a></h3>
                <div class="meta-tags">
                  <a href="#" class="post-meta category"><i class="ti-package"></i>{{$post->postCategoryName}}</a><a href="#" class="post-meta commentCount"><i class="ti-comments"></i>{{DB::table('comments')->where('post_id',$post->id)->count()}} Comments</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- Blog section end -->

    <!-- Call to action section start -->
    <section class="callto-action">
      <div class="container">
        <div class="row">
          <div class="col-md-8 m-auto text-center">
            <h3>Newsletter Subscription</h3>
            <p>Subscribe to our newsletter to receive a 10% discount</p>
            <form class="newsletter" action="#">
            <input type="text" placeholder="Enter your Email">
            <button type="submit"><i class="ti-location-arrow"></i>Subscribe</button>
          </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to action section end -->

@endsection