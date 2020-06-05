<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Model\Course;
use App\Model\CourseCategory;
use Session;
use DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas=Course::all();
        return view('backEnd.course.index',['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
         $courseCategoryDatas=DB::table('course_categories')
               ->select('*')
               ->where('sub_category','!=',null)
               ->get();
        return view('backEnd.course.create',['courseCategoryDatas'=>$courseCategoryDatas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*dd($request->all());*/
        
          $obj=new Course();
          $obj->course_name=$request->course_name;
         
     $obj->course_category_id=$request->course_category_id;
         if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time().'.'.$image->getClientOriginalExtension();
          $location = public_path('courseImages/'.$filename);
          Image::make($image)->resize(500,334)->save($location);
          $obj->image=$filename;
          
         }
         $obj->price=$request->price;
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
        $data=Course::find($id);
        /*echo '<pre>';
        print_r($data);*/
        return view('backEnd.course.edit',['data'=>$data]);
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
        $data=Course::find($id);
        $data->course_name=$request->course_name;

         if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time().'.'.$image->getClientOriginalExtension();
          $location = public_path('courseImages/'.$filename);
          Image::make($image)->resize(500,334)->save($location);
          $data->image=$filename;
          
         }
         $data->price=$request->price;
         $data->update();
         return redirect()->route('course.index');
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
        return redirect()->route('course.index');
    }
}
