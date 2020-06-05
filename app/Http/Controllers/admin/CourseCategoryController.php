<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CourseCategory;
use Session;
use DB;


class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=CourseCategory::all();
        return view('backEnd.courseCategory.index',['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items=DB::table('course_categories')
               ->select('*')
               ->where('sub_category','=',null)
               ->get();
             
        return view('backEnd.courseCategory.create',['items'=>$items]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj=new CourseCategory();
        $obj->name=$request->name;
        $obj->sub_category=$request->sub_category;
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
         $data=CourseCategory::find($id);
          $categoryDatas=CourseCategory::all();
        return view('backEnd.courseCategory.edit',['data'=>$data,'categoryDatas'=>$categoryDatas]);
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
        $obj=CourseCategory::find($id);
        $obj->name=$request->name;
        $obj->sub_category=$request->sub_category;
        $obj->update();
        Session::flash('message','Data Update successfully');
        return redirect()->route('course-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CourseCategory::find($id)->delete();
        return redirect()->route('course-category.index');
    }
}
