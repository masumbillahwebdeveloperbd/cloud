<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Category;
use App\User;
use Session;
use DB;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Post::all();
        
        return view('backEnd.post.index',
            ['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userDatas=User::all();

        //$categoryDatas=Category::all();
        $postCategoryDatas=DB::table('post_categories')
               ->select('*')
               ->where('sub_category','!=',null)
               ->get();
             /*  echo '<pre>';
               print_r($items);
               exit();*/
        return view('backEnd.post.create',['userDatas'=>$userDatas,
            'postCategoryDatas'=>$postCategoryDatas]);

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
        $obj=new Post();
        $obj->title=$request->title;

        if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time().'.'.$image->getClientOriginalExtension();
          $location = public_path('postImages/'.$filename);
          Image::make($image)->resize(500,334)->save($location);
          $obj->image=$filename;
         }
         $obj->post_category_id=$request->post_category_id;
         $obj->details=$request->details;
         $obj->user_id=$request->user_id;
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
        $data=Post::find($id);
        $categoryDatas=Category::all();
        $userDatas=User::all();
        /*echo '<pre>';
        print_r($data);*/
        return view('backEnd.post.edit',['data'=>$data,'categoryDatas'=>$categoryDatas,'userDatas'=>$userDatas]);
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
        $obj=Post::find($id);
        $obj->title=$request->title;

        if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time().'.'.$image->getClientOriginalExtension();
          $location = public_path('postImages/'.$filename);
          Image::make($image)->resize(500,334)->save($location);
          $obj->image=$filename;
         }

         $obj->category_id=$request->category_id;
         $obj->details=$request->details;
         $obj->user_id=$request->user_id; 
         $obj->update();        
         Session::flash('message','Data Update successfully');
         return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('post.index');
    }
}
