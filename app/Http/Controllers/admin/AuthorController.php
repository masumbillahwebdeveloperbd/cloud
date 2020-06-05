<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Model\Author;
use Session;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Author::all();
        return view('backEnd.author.index',['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.author.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
          $obj=new Author();
          $obj->name=$request->name;
          $obj->info=$request->info;
          $obj->address=$request->address;
         if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time().'.'.$image->getClientOriginalExtension();
          $location = public_path('authorImages/'.$filename);
          Image::make($image)->resize(500,334)->save($location);
          $obj->image=$filename;
         }

         $obj->phone_number=$request->phone_number;
         $obj->designation=$request->designation;
         $obj->facebook_link=$request->facebook_link;
         $obj->twitter_link=$request->twitter_link;
         $obj->linkedin_link=$request->linkedin_link;
         $obj->youtube_link=$request->youtube_link;

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
        $data=Author::find($id);
        /*echo '<pre>';
        print_r($data);*/
        return view('backEnd.author.edit',['data'=>$data]);
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
        $data=Author::find($id);
          $obj->name=$request->name;
          $obj->info=$request->info;
          $obj->address=$request->address;
         if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time().'.'.$image->getClientOriginalExtension();
          $location = public_path('authorImages/'.$filename);
          Image::make($image)->resize(500,334)->save($location);
          $obj->image=$filename;
         }

         $obj->phone_number=$request->phone_number;
         $obj->designation=$request->designation;
         $obj->facebook_link=$request->facebook_link;
         $obj->twitter_link=$request->twitter_link;
         $obj->linkedin_link=$request->linkedin_link;
         $obj->youtube_link=$request->youtube_link;

         $data->update();
         return redirect()->route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Author::find($id)->delete();
        return redirect()->route('author.index');
    }
}
