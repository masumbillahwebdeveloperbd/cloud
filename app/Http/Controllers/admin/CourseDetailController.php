<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CourseDetail;
use App\Model\Course;
use App\Model\Author;
use Session;
use Image;

class CourseDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datas=CourseDetail::all();
        return view('backEnd.courseDetails.index',
            ['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courseDatas=Course::all();
        $authorDatas=Author::all();
        return view('backEnd.courseDetails.create',['courseDatas'=>$courseDatas,'authorDatas'=>$authorDatas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            

          $obj=new CourseDetail();
          $obj->course_id=$request->course_id;


            if($request->hasFile('cover_photo')){
          $cover_photo = $request->file('cover_photo');
          $filename = time().'.'.$cover_photo->getClientOriginalExtension();
          $location = public_path('courseDetailImages/'.$filename);
          Image::make($cover_photo)->resize(500,334)->save($location);
          $obj->cover_photo=$filename;
         }
          $obj->video_link=$request->video_link;
          $obj->requirement=$request->requirement;
          $obj->include=$request->include;
          $obj->course_objective=$request->course_objective;
          $obj->author_id=$request->author_id;

          $obj->save();
         Session::flash('success','Data save successfully');
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courseDatas=Course::all();
        $authorDatas=Author::all();
        return view('backEnd.courseDetails.edit',['courseDatas'=>$courseDatas,'authorDatas'=>$authorDatas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
          $obj=new CourseDetail();
          $obj->course_id=$request->course_id;


            if($request->hasFile('cover_photo')){
          $cover_photo = $request->file('cover_photo');
          $filename = time().'.'.$cover_photo->getClientOriginalExtension();
          $location = public_path('courseDetailImages/'.$filename);
          Image::make($cover_photo)->resize(500,334)->save($location);
          $obj->cover_photo=$filename;
         }
          $obj->video_link=$request->video_link;
          $obj->requirement=$request->requirement;
          $obj->include=$request->include;
          $obj->course_objective=$request->course_objective;
          $obj->author_id=$request->author_id;

          $obj->update();
         Session::flash('message','Data save successfully');
         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::find($id)->delete();
        Course::Author($id)->delete();
        return redirect()->route('service-details.index');
    }
}
