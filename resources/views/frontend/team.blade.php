 @extends('layouts.app')
@section('title',"about")
@section('content')

 <!-- Page feature start -->
    <section class="page-feature">
      <div class="container text-center">
        <h2>Trainers</h2>
        <div class="breadcrumb">
          <a href="home.html">Home</a>
          <span>/ Trainers</span>
        </div>
      </div>
    </section>
    <!-- Page feature end -->
<!-- About section start -->
    <section class="about">
      <div class="container">
        <div class="row">
          @foreach($teams as $team)
             <div class="col-md-3" style="margin-top:100px ">
                <div class="post-item">
                    <div class="post-content">
                    <img src="{{asset('teamImages/'.$team->image)}}" alt="" width="50" height="50">
                    <h3 class="post-title"><a href="">{{$team->name}}</a></h3>
                    <div class="meta-tags">
                      <a href="#" class="post-meta category">{{$team->designation}}</a>
                    </div>
                    <div>{{$team->info}}</div>
                    <div>{!!$team->address!!}</div>
                      <div class="socials">
                    <a href="{{$team->facebook_link}}" class="facebook"><i class="ti-facebook"></i></a>
                    <a href="{{$team->twitter_link}}" class="twitter"><i class="ti-twitter-alt"></i></a>
                    <a href="{{$team->linkedin_link}}" class="linkedin"><i class="ti-linkedin"></i></a>
                    <a href="{{$team->youtube_link}}" class="youtube"><i class="ti-youtube"></i></a>
                  </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
      </div>
    </section>
    <!-- About section end -->
    @endsection
