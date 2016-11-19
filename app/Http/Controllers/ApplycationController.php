<?php

namespace App\Http\Controllers;
use App\data_package;
use App\users;
use App\application;
use App\application_data_package;
use Illuminate\Http\Request;
use App\grate;

use App\Http\Requests;

class ApplycationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        die("12");
        $application = application::where('status',2)->get();
        foreach($application as $result)
        {
            $result=$result->application_data_package;
            $id=$result->data_package_id;
            $result->data_package_name=data_package::find($id)->name;
           // echo $result->data_package_name;
           //echo $result->data_package_id;//application_data_package->data_package_id;
        }
     // $application = application::all();
       // $application = users::first();
       // echo $application;
      // $applications=$application->hasgrate;
       // die($application);
        return view('Application.index',['applications'=>  $application]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $category = new application_data_package();
//        $category->name = $request->name;
//        $category->parent_id = 1;
//        try{
//            $category->save();
//            return redirect('category')->withInfo('成功添加商品分类！');
//        }catch (\Exception $e){
//            return redirect()->back()->withErrors($e->getMessage());
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $request=data_package::find($id);
        $request->application_data_package;
        return view('Application.show',['data_package'=>  $request]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result=application::find($id);
        $result->status=1;
        $result->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
        $result=application::find($id);
        $result->status=3;
        $result->reject_reason=$request->reason;
        $result->save();
        return redirect('Apply')->withInfo('拒绝成功！');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
