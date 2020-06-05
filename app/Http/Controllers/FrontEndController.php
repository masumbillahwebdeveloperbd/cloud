<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\Post;
use App\Model\Comment;
use App\Model\Reply;
use App\Model\PostCategory;
use App\Model\Event;
use App\Model\Service;
use App\Model\Author;
use App\Model\Erp;
use App\Model\Course;
use App\Model\Team;
use App\Model\Jobopportunity;
use Auth;


class FrontEndController extends Controller
{
    public function index(){
        $services=Service::limit(6)->get();

        $posts=DB::table('posts')
        ->join('post_categories','posts.post_category_id','=',
            'post_categories.id')
        ->join('users','posts.user_id','=',
            'users.id')
        ->select('posts.*','users.name as userName','post_categories.name as postCategoryName')
        ->get();

        $events=Event::all();
        $courses=Course::all();
        $authors=Author::all();

    	return  view('frontend.home',['services'=>$services,'posts'=>$posts,'events'=>$events,'courses'=>$courses,'authors'=>$authors]);
    }
    public function serviceCategoryDetails($id){
       $serviceNames=DB::table('services')
       ->where('service_category_id',$id)
       ->get();

        return view('frontend.service.services',['serviceNames'=>$serviceNames]);
    }
    public function serviceDetails($id){
       $serviceDetail=DB::table('service_details')
     /*  ->join('services','services.id','=','service_details.service_id')
       ->select('service_details.*','services.title','services.image')*/
       ->where('id',$id)
       ->first();
       $serviceId=$serviceDetail->service_id;
       $service=DB::table('services')
       ->where('id',$serviceId)
       ->first();
    
        return view('frontend.service.serviceDetails',[
            'serviceDetail'=>$serviceDetail,
            'service'=>$service
    ]);
    }
    public function categoryBlog($id){
       $categoryBlogs=Post::where('post_category_id',$id)
                       ->get();
       return view('frontend.blog.categoryBlog',['categoryBlogs'=>$categoryBlogs]);
    }
    public function blog(){
           $posts=DB::table('posts')
        ->join('post_categories','posts.post_category_id','=',
            'post_categories.id')
        ->join('users','posts.user_id','=',
            'users.id')
       
        ->select('posts.*','users.name as userName','post_categories.name as postCategoryName')
        ->paginate(3);

        $postRecent=Post::orderBy('created_at', 'desc')->limit(2)->get();
        $postCategories=PostCategory::where('sub_category','!=',null)->get();
    	return view('frontend.blog.blogPage',['posts'=>$posts,
        'postRecent'=>$postRecent, 'postCategories'=>$postCategories]);
    }
    public function blogDetails($id){
    	$postDetails=DB::table('posts')->where('id',$id)->first();
        $postCategoryId=$postDetails->post_category_id;
        $postCategories=PostCategory::where('sub_category','!=',null)->get();
        $countCategoryPost = DB::table('posts')
        ->where('post_category_id', $postCategoryId)
        ->count();
        $comments=Comment::all();
        $replies=Reply::all();
        $postRecent=Post::orderBy('created_at', 'desc')->limit(2)->get();
            return view('frontend.blog.blogDetailsPage',['postDetails'=>$postDetails,'countCategoryPost'=>$countCategoryPost,'postCategories'=>$postCategories,'postRecent'=>$postRecent]);  	
    }

    public function commentSave(Request $request){
         $obj=new Comment();
         $obj->post_id=$request->post_id;
         $obj->user_id=Auth::user()->id;
         $obj->body=$request->body;
         $obj->publication_status=0;
         $obj->save();
         return redirect()->back();

    }
    public function replyWithId($id){
     
     echo  '<input type="hidden" name="comment_id" value="';
     echo $id;
     echo '">';
     echo '<input type="hidden" name="user_id" value="';
     echo Auth::user()->id;
     echo '">';
     echo '<textarea placeholder="Write Reply" name="body"></textarea>
          <button class="btn btn-filled btn-round ml-auto"><span class="bh"></span> <span>Submit</span></button>';     
   
    }
    public function replySave(Request $request){
         $obj=new Reply();
         $obj->comment_id=$request->comment_id;
         $obj->user_id=$request->user_id;
         $obj->body=$request->body;
         $obj->publication_status=0;
         
         $obj->save();
         return redirect()->back();
    }
    public function jobOppurtunity(){
        $jobs=Jobopportunity::all();
        return view('frontend.job',['jobs'=>$jobs]);
    }

    public function event(){
    	return view('frontend.event.eventPage');
    }
     public function eventDetails($id){
        $data=Event::find($id);
    	return view('frontend.event.eventDetails',['data'=>$data]);
    }

    public function about(){
        return view('frontend.about');
    }

    public function course($id){
        $courseNames=DB::table('course_categories')
        ->join('courses','courses.course_category_id','=',
            'course_categories.id')
        ->select('course_categories.*','courses.*')
        ->where('sub_category',$id)
        ->get();

        return view('frontend.course.course',['courseNames'=>$courseNames
      ]);
    }
    public function courseDetails($id){
        $courseDetail=DB::table('course_details')
        ->join('courses','courses.id','=',
            'course_details.course_id')
        ->join('course_categories','course_categories.id','=',
            'courses.course_category_id')
        ->join('curriculums','course_details.course_id','=',
            'curriculums.course_id')
        ->join('authors','course_details.author_id','=','authors.id')
        ->select('course_details.*','courses.*','authors.name as authorName','authors.*','curriculums.*','course_categories.name as coureseCategoryName')
        ->where('course_details.course_id',$id)
        ->first();
         return view('frontend.course.courseDetails',['courseDetail'=>$courseDetail]);
    }
    public function erp(){
        $erpNames=Erp::all();
        return view('frontend/erp/erp',['erpNames'=>$erpNames]);
    }
    public function erpDetails($id){
        $erpDetails=Erp::find($id);
        return view('frontend/erp/erpDetails',['erpDetails'=>$erpDetails]);
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function trainers(){
        $authors=Author::all();
        return view('frontend.trainers',['authors'=>$authors]);
    }
    public function team(){
        $teams=Team::all();
        return view('frontend.team',['teams'=>$teams]);
    }
    public function userDashboard(){
        echo "masum nnnnnn";
    }


}
