<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Model\Service;
use App\Model\ServiceCategory;
use Session;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datas=Service::all();
        return view('backEnd.service.index',['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serviceCategoryDatas=ServiceCategory::all();
        return view('backEnd.service.create',['serviceCategoryDatas'=>$serviceCategoryDatas]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $obj=new Service(); 
          $obj->service_category_id=$request->service_category_id;
          $obj->title=$request->title;
          $obj->slug = Str::slug($request->title, '-');

         if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time().'.'.$image->getClientOriginalExtension();
          $location = public_path('serviceImages/'.$filename);
          Image::make($image)->resize(500,334)->save($location);
          $obj->image=$filename;
         }
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
        $data=Service::find($id);
        /*echo '<pre>';
        print_r($data);*/
        return view('backEnd.service.details',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Service::find($id);
        /*echo '<pre>';
        print_r($data);*/
        return view('backEnd.service.edit',['data'=>$data]);
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

        $data=Service::find($id);
        $data->title=$request->title;

         if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time().'.'.$image->getClientOriginalExtension();
          $location = public_path('serviceImages/'.$filename);
          Image::make($image)->resize(500,334)->save($location);
          $data->image=$filename;
         }
         $data->update();
         return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Service::find($id)->delete();
        return redirect()->route('service.index');
    }
}
