<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ServiceDetail;
use App\Model\Service;
use Session;

class ServiceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas=ServiceDetail::all();
        

        return view('backEnd.serviceDetails.index',
            ['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serviceDatas=Service::all();
        return view('backEnd.serviceDetails.create',['serviceDatas'=>$serviceDatas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
          $obj=new ServiceDetail();
          $obj->service_id=$request->service_id;
          $obj->sell_count=$request->sell_count;
          $obj->rating=$request->rating;
          $obj->details=$request->details;
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
        $data=ServiceDetail::find($id);
        $serviceDatas=Service::all();
        /*echo '<pre>';
        print_r($data);*/
        return view('backEnd.serviceDetails.edit',['data'=>$data,'serviceDatas'=>$serviceDatas]);
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
          $obj=ServiceDetail::find($id);
          $obj->service_id=$request->service_id;
          $obj->sell_count=$request->sell_count;
          $obj->rating=$request->rating;
          $obj->details=$request->details;
          $obj->price=$request->price;

          $obj->update();
         Session::flash('message','Data update successfully');
         return redirect()->route('service-details.index');
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
        return redirect()->route('service-details.index');
    }
}
