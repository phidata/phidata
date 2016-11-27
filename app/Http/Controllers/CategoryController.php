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
        return view('goodsCategory.create');
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


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $category = GoodsCategory::all();
        return view('goodsCategory.goodsCategory',['categorys'=> $category]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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


    public function delete($id) {
        $category = GoodsCategory::find($id);
        $category->delete();
        return redirect('category')->withInfo('成功删除商品分类！');
    }
}
