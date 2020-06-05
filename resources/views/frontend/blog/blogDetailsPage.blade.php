  @extends('layouts.app')
  @section('title','blog-details')
  @section('content')
    <!-- Page feature start -->
    <section class="page-feature">
      <div class="container text-center">
        <h2>Blog Details</h2>
        <div class="breadcrumb">
          <a href="home.html">Home</a>
          <span>/ Blog Details</span>
        </div>
      </div>
    </section>
    <!-- Page feature end -->

    <!-- Blog Posts section start -->
    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="single-blog-post">
              <figure class="feature-img">
                <img src="images/course-preview.jpg" alt="">
              </figure>
              <div class="entry-content">
             
                <h3>{{$postDetails->title}}</h3>
                <p>{{$postDetails->details}}</p>
              </div>
            </div>
       

            <div class="comments">
              <h4 class="comment-title">comments</h4>
              <ul>
      @foreach(DB::table('comments')->where('post_id',$postDetails->id)->get() as $comments)

                <li>
                  <div class="single-comment">
                    <div class="user-thumb">
                      <img class="avatar-small circle" src="images/avatar-small.png" alt="">
                    </div>
                    <div class="comments-body">
                        <p>{{DB::table('users')->where('id',$comments->user_id)->pluck('name')}}---> {{$comments->body}}</p>
                                       
                      <p></p>
                      @if(Auth::check())
                      <i class="ti-back-right">  <button class="couponButton" onclick="addInput({{$comments->id}});">Reply</button></i>
                      @endif
                  {{Form::open(["route"=>"reply.store","method"=>"POST"])}}
                  <div class="comment-form" id="{{'div'.$comments->id}}">
                     
                  </div>
                  {{Form::close()}}
                  <h4>
                    @foreach(DB::table('replies')->where('comment_id',$comments->id)->get() as $reply)</h4>
                    <p>{{$reply->body}} <---{{DB::table('users')->where('id',$reply->user_id)->pluck('name')}}</p>
                      
                    @endforeach
                  
                    </div>                    
                  </div>
   
                </li>
                @endforeach
                
              </ul>
            </div>
          
        @if(Auth::check())

            <div class="comment-form">
              <h4 class="comment-title">Leave a comment</h4>
              
                  {{Form::open(['route'=>'comment.store','method'=>'POST'])}}
                  <input type="hidden" name="user_id" value="">
                  <input type="hidden" name="post_id" value="{{$postDetails->id}}">
                <textarea placeholder="Write Comments" name="body"></textarea>
                <button class="btn btn-filled btn-round ml-auto"><span class="bh"></span> <span>Submit</span></button>
                 {{Form::close()}}
            </div>
          @endif
          </div>
          <div class="col-lg-4">
            <aside class="sidebar">
              <div class="widget categories">
                <h3 class="widget-title">Categories</h3>
                <ul>
                  @foreach($postCategories as $postCategorie)
                  <li><a href="#">{{$postCategorie->name}}</a></li>
                  @endforeach
                </ul>
              </div>
              <div class="widget recent-posts">
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
<script>
obj1=new XMLHttpRequest();

function addInput(commentId)
{
  
  obj1.open("GET", 'http://localhost:8000/reply/'+commentId);
  
  obj1.onreadystatechange=function(){  
  if(obj1.readyState==4 && obj1.status==200){     
  document.getElementById('div'+commentId).innerHTML=obj1.responseText;

}   
  }
  obj1.send(null);
}
</script>

@endsection