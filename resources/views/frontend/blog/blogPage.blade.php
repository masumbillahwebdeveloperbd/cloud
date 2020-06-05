
    @extends('layouts.app')
    @section('title','blog')
    @section('content')
    <!-- Page feature start -->
    <section class="page-feature">
      <div class="container text-center">
        <h2>Blog</h2>
        <div class="breadcrumb">
          <a href="home.html">Home</a>
          <span>/ Blog</span>
        </div>
      </div>
    </section>
    <!-- Page feature end -->

    <!-- Blog Posts section start -->
    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
       @foreach($posts as $post)
              <div class="col-md-6">
                <div class="post-item">
                  <img src="{{asset('postImages/'.$post->image)}}" alt="">
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
              <div class="row">
                <div class="col-lg-8"></div>
                  {{ $posts->links() }}
      
                </div>

          </div>
          <div class="col-lg-4">
            <aside class="sidebar">
         
              <div class="widget categories">
                <h3 class="widget-title">Categories</h3>
                <ul>
                  @foreach($postCategories as $postCategory)
                  <li>
                  <a href="{{url('category-blog/'.$postCategory->id)}}">{{$postCategory->name}}</a>
                  </li>
                  @endforeach
                </ul>
              </div>
              <div class="widget recent-courses">
                <h3 class="widget-title">recent posts</h3>
                  <ul>
                    @foreach($postRecent as $val_postRecent)
                    <li>
                      <a href="#">
                        <img src="{{asset('postImages/'.$val_postRecent->image)}}"  alt="" width="20" height="20">
                        <h5>{{$val_postRecent->title}}</h5>
                        <div class="meta-tags">
                          <span class="post-meta category">
                          </span> | <span class="post-meta date">{{$val_postRecent->created_at}}</span>
                        </div>
                      </a>
                    </li>
                    @endforeach
                  </ul>
              </div>
            </aside>
          </div>
        </div>        
      </div>
    </section>
    <!-- Blog Posts section end -->

@endsection
