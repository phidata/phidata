<?php

namespace App\Http\Controllers;

use App\application_data_package;
use App\application;
use App\DataPackage;
use Illuminate\Http\Request;

use App\Http\Requests;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        die(file_get_contents('E:\phiknowledge\php\phidata\public\1111.txt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('package');
        try{
            \DB::beginTransaction();

            //保存数据包到 storage/app 下
            $fileName = uniqid().'.'.$file->getClientOriginalExtension();
            \Storage::put(
                $fileName,
                file_get_contents($file->getRealPath())
            );

            //保存该条数据包记录到数据库
            $package = new DataPackage;
            $package->name = $request->name;
            $package->price = $request->price;
            $package->description = $request->description;
            $package->owner_id = \Auth::id();
            $package->size = $file->getSize();
            $package->url = $fileName;
            $package->save();

            //提交数据包审核申请
            $application = new application;
            $application->status = 2;
            $application->user_id = \Auth::id();
            $application->type = 1;
            $application->save();

            //建立数据包与申请的中间表记录
            $applicationPackage = new application_data_package;
            $applicationPackage->application_id = $application->id;
            $applicationPackage->data_package_id = $package->id;
            $applicationPackage->save();
            
            \DB::commit();
            return redirect('user/upload')->withInfo('成功上传数据包！');
        }catch (\Exception $e){
            \DB::rollback();
            return redirect()->back()->withInfo('上传失败，请重试！');
        }
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
        //
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
        //
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
