
    @extends('layouts.app')
    @section('title','Blog by Category')
    @section('content')
    <!-- Page feature start -->
    <section class="page-feature">
      <div class="container text-center">
        <h2>Blog</h2>
        <div class="breadcrumb">
          <a href="home.html">Home</a>
          <span>/ Blog-Category-Name</span>
        </div>
      </div>
    </section>
    <!-- Page feature end -->

    <!-- Blog Posts section start -->
    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
       @foreach($categoryBlogs as $categoryBlog)
              <div class="col-md-4">
                <div class="post-item">
                  <img src="{{asset('postImages/'.$categoryBlog->image)}}" alt="">
                  <div class="post-content">
                   
                    <h3 class="post-title"><a href="{{url('blog-details/'.$categoryBlog->id)}}">{{$categoryBlog->title}}</a></h3>
                 
                  </div>
                </div>
              </div>
        @endforeach


            </div>
            

          </div>


        </div>        
      </div>
    </section>
    <!-- Blog Posts section end -->

@endsection
