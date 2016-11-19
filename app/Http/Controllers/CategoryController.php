<?php

namespace App\Http\Controllers;

use App\GoodsCategory;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = GoodsCategory::all();
        return view('goodsCategory.index',['categorys'=> $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        return view('goodsCategory.create');
=======
//        return view('goodsCategory.create');
        $category = GoodsCategory::all();
        return view('goodsCategory.goodsCategory',['categorys'=> $category]);
>>>>>>> 3ab496c7fd4f5367f055b7dd768a3c9af196f46e
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new GoodsCategory;
        $category->name = $request->name;
        $category->parent_id = 1;
        try{
            $category->save();
            return redirect('category')->withInfo('成功添加商品分类！');
        }catch (\Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

<<<<<<< HEAD
=======

>>>>>>> 3ab496c7fd4f5367f055b7dd768a3c9af196f46e
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
        //
=======
        $category = GoodsCategory::all();
        return view('goodsCategory.goodsCategory',['categorys'=> $category]);
>>>>>>> 3ab496c7fd4f5367f055b7dd768a3c9af196f46e
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function edit($id)
    {
        //
    }

=======
    public function edit($id){
        //
    }

    public function change($id) {
        $category = GoodsCategory::find($id);
        return view('goodsCategory.edit',['category'=> $category]);
    }

    public function modify(Request $request, $id)
    {
        $category = GoodsCategory::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect('category')->withInfo('成功修改商品分类！');
    }

>>>>>>> 3ab496c7fd4f5367f055b7dd768a3c9af196f46e
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

<<<<<<< HEAD
=======
    public function showpage() {
        $category = GoodsCategory::all();
        return view('goodsCategory.goodsCategory',['categorys'=> $category]);
    }

>>>>>>> 3ab496c7fd4f5367f055b7dd768a3c9af196f46e
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
<<<<<<< HEAD

    public function delete($id)
    {
=======
    public function delete($id) {
>>>>>>> 3ab496c7fd4f5367f055b7dd768a3c9af196f46e
        $category = GoodsCategory::find($id);
        $category->delete();
        return redirect('category')->withInfo('成功删除商品分类！');
    }
}
