<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Erp;
use Session;
use Image;

class ErpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas=Erp::all();
        return view('backEnd.erp.index',['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        return view('backEnd.erp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $obj=new Erp();
          $obj->title=$request->title;
          $obj->erp_description=$request->erp_description;

         if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time().'.'.$image->getClientOriginalExtension();
          $location = public_path('erpImage/'.$filename);
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
         $data=Erp::find($id);
        return view('backEnd.erp.edit',['data'=>$data]);
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
         $obj=Erp::find($id);
          $obj->title=$request->title;
          $obj->erp_description=$request->erp_description;

         if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time().'.'.$image->getClientOriginalExtension();
          $location = public_path('erpImage/'.$filename);
          Image::make($image)->resize(500,334)->save($location);
          $obj->image=$filename;
         }
         $obj->update();
         Session::flash('success','Data update successfully');
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
        Erp::find($id)->delete();
        return redirect()->route('erp.index');
    }
}
