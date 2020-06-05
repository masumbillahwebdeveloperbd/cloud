<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PostCategory;
use Session;
use DB;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=PostCategory::all();
        return view('backEnd.postCategory.index',['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $items=DB::table('post_categories')
               ->select('*')
               ->where('sub_category','=',null)
               ->get();
             /*  echo '<pre>';
               print_r($items);
               exit();*/
        return view('backEnd.postCategory.create',['items'=>$items]);
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

         $obj=new PostCategory();
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
        $data=PostCategory::find($id);
        $postCategoryDatas=PostCategory::all();
        /*echo '<pre>';
        print_r($data);*/
        return view('backEnd.postCategory.edit',['data'=>$data,'postCategoryDatas'=>$postCategoryDatas]);
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
         $obj=PostCategory::find($id);
          $obj->name=$request->name;
          $obj->sub_category=$request->sub_category;
          $obj->update();
         Session::flash('message','Data update successfully');
         return redirect()->route('post-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PostCategory::find($id)->delete();
        return redirect()->route('post-category.index');
    }
}
