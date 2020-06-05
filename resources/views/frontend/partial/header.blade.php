    <style>
      .myBtn:hover{
        color:red !important;
      }
    </style>

    <!-- Header strat -->


    <header class="header">
      <div class="container">
        <nav class="navbar">
          <!-- Site logo -->
          <a href="home-01.html" class="logo">
            <img src="{{asset('images/logo/logo-update.png')}}" alt="">
            
          </a>
          <a href="javascript:void(0);" id="mobile-menu-toggler">
            <i class="ti-align-justify"></i>
          </a>
          <ul class="navbar-nav">
            <li class=" current-menu-item">
              <a href="{{url('/')}}">Home</a>
             
            </li>
            <li class="has-menu-child">
              <a href="javascript:void(0);">Services</a>
              <ul class="sub-menu">
                @foreach($serviceNames as $serviceName)
                <li>
                  <a href="{{url('/service-category/'.$serviceName->id)}}">{{$serviceName->name}}</a>
                <li>
                @endforeach
             
              </ul>
            </li>
             <li class=" current-menu-item">
              <a href="{{url('erp')}}">ERP</a>
             
            </li>

        
            <li><a href="https://cloudiconit.com/">HOSTING</a></li>
            
            <li class="has-menu-child">
              <a href="javascript:void(0);">Courses</a>
              <ul class="sub-menu">
                
                @foreach($courseCategoryNames as $courseCategoryName)
                <li><a href="{{url('course-name/'.$courseCategoryName->id)}}">{{$courseCategoryName->name}}</a></li>
                @endforeach
                <!-- <li><a href=" {{url('course_details')}}">Course Details</a></li> -->
              </ul>
            </li>

            <li class="has-menu-item">
              <a href="{{url('blog')}}">Blog</a>
             
            </li>
            <li class="has-menu-child">
              <a href="javascript:void(0);">Events</a>
              <ul class="sub-menu">
               @foreach($eventNames as $eventName)
                <li>
                  <a href="{{url('/event-details/'.$eventName->id)}}">{{$eventName->title}}</a>
                <li>
                @endforeach
              </ul>
              
             
            </li>

      <li class="has-menu-child">
              <a href="javascript:void(0);">About</a>
              <ul class="sub-menu">
                
                
                <li><a href="{{url('about')}}">CloudIcon Training</a></li>
                <li><a href="{{url('trainers')}}">Our Trainers</a></li>
                <li><a href="{{url('team')}}">CloudIcon Team</a></li>
                
              </ul>
            </li>


        
    
            
            
            <li><a href="{{url('contact')}}">Contact</a></li>
          
            @if(Auth::check())
            <li>
            
              {{Form::open(['route'=>'logout','method'=>'POST','style'=>'display:inline-block'])}}
            <button type="submit" class="btn myBtn" style="color: #0c2e60;
    display: block;
    font-size: 13px;
    font-family: Roboto;
    text-transform: uppercase;
    line-height: 0.8;
    padding: 22px 15px;  ">Log out</button>
            {{Form::close()}}
            </li>
            @endif
            
          @if(!Auth::check())
        <li><a href="{{url('login')}}">Log in</a></li>
        @endif
      
          </ul>
        </nav>
      </div>
    </header>
    <!-- Header strat -->