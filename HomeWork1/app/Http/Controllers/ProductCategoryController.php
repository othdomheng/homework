<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Requests\ProductCategoryRequest;


class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = ProductCategory::paginate(5);
        return view('product_categories.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCategoryRequest $request)
    {
        $category = ProductCategory::create($request->only(['name']));
        if($category) return redirect()->back()->with('success','Saved');
        return redirect()->back()->with('message','Failed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data['categoryedit'] = ProductCategory::findOrFail($id);
        return view('product_categories.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCategoryRequest $request, $id)
    {
        $categoryedit = ProductCategory::findOrFail($id);
        $categoryedit = $categoryedit->update($request->only(['name']));
        if($categoryedit) return redirect()->route('product-categories.index')->with('success','Saved');
        return redirect()->back()->with('failed','Failed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorydelete = ProductCategory::findOrFail($id);
        $categorydelete->delete();
        if($categorydelete) return redirect()->route('product-categories.index')->with('success','Saved');
        return redirect()->back()->with('failed','Failed');


    }
}
