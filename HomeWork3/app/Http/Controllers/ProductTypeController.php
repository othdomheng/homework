<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producttype = ProductType::paginate(5);
        return view('product_type.index', compact('producttype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = ProductType::create($request->all());
        if($create)
            return redirect()->back()->with('success', 'Saved');
            return redirect()->back()->with('failed', 'Failed in saving data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data['typeedit'] = ProductType::findOrFail($id);
        return view('product_type.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $typeedit = ProductType::findOrFail($id);
        $typeedit = $typeedit->update($request->only('name', 'created_by', 'updated-by'));
        if($typeedit) return redirect()->route('product-type.index')->with('success','Saved');
        return redirect()->back()->with('failed','Failed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $condition = Product::has('product_type')->count();
        if($condition > 0) {
            return redirect()->route('product_type.index')->with('warning', 'Do not delete it, this product type is used in {{$condition}} products!');
        }
        else {
            $typedelete = ProductType::findOrFail($id);
            $typedelete->delete();
            return redirect()->route('product_type.index')->with('success', 'Deleted');
        }
    }
}
