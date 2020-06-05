<?php

namespace App\Http\Controllers\ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CourseSearchController extends Controller
{
    public function courseSearch($serchText){
    	    $searchCourses=DB::table('courses')
                ->where('course_name','LIKE',"%{$serchText}%")
                ->get();
              /* echo '<pre>';
               print_r($searchCourses);
               exit();*/
                $m= view('frontend.course.courseSearch')->with('searchCourses',$searchCourses);
                echo $m;
       

    }
}
