
        @foreach($searchCourses as $searchCourse)
          <div class="col-lg-4 col-md-6">
            <div class="single-course">
              <figure class="course-thumb">
                <img src="{{asset('courseImages/'.$searchCourse->image)}}" alt="">
                <strong class="ribbon">{{$searchCourse->price}}</strong>
              </figure>
              <div class="course-content">
                <p style="margin-left:100px; font-size:30px; ">{{$searchCourse->course_name}}</p>
                <p>

                </p>
                <div class="enroll">
           
                  <div class="course-meta text-right">
                    <!-- <strong class="course-price">$29.00</strong> -->
                    <a href="{{url('/course-details/'.$searchCourse->id)}}" class="btn btn-filled">Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

       @endforeach
