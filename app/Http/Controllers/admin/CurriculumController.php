<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Curriculum;
use App\Model\Course;
use Session;
use DB;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas=Curriculum::all();
        
     
        return view('backEnd.curriculum.index',['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courseDatas=Course::all();

               $datas=Curriculum::all();
          $items=DB::table('curriculums')
               ->select('*')
               ->where('sub_title','=',null)
               ->get();
             /*  echo '<pre>';
               print_r($items);
               exit();*/
        return view('backEnd.curriculum.create',['datas'=>$datas,'items'=>$items,'courseDatas'=>$courseDatas]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
          $obj=new Curriculum();
          $obj->course_id=$request->course_id;
          $obj->title=$request->title;
          $obj->lecture_no=$request->lecture_no;
          $obj->sub_title=$request->sub_title;

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
        $data=Curriculum::find($id);
        $courseDatas=Course::all();
          $items=DB::table('curriculums')
               ->select('*')
               ->where('sub_title','=',null)
               ->get();
             /*  echo '<pre>';
               print_r($items);
               exit();*/
        return view('backEnd.curriculum.edit',
            ['data'=>$data,'courseDatas'=>$courseDatas,'items'=>$items]);
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
          $obj=Curriculum::find($id);
          $obj->course_id=$request->course_id;
          $obj->title=$request->title;
          $obj->lecture_no=$request->lecture_no;
          $obj->sub_title=$request->sub_title;

          $obj->update();
         Session::flash('update','Data Update successfully');
         return redirect()->route('curriculum.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Curriculum::find($id)->delete();
        return redirect()->route('curriculum.index');
    }
}
