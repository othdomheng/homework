<?php

namespace App\Http\Controllers;

use App\Models\ProductStatus;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productstatus = ProductStatus::paginate(5);
        return view('product_statuses.index', compact('productstatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product_statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = ProductStatus::create($request->all());
        if($create)
            return redirect()->back()->with('success', 'Saved');
            return redirect()->back()->with('failed', 'Failed in saving data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductStatus  $productStatus
     * @return \Illuminate\Http\Response
     */
    public function show(ProductStatus $productStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductStatus  $productStatus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data['statusedit'] = ProductStatus::findOrFail($id);
        return view('product_statuses.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductStatus  $productStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $statusedit = ProductStatus::findOrFail($id);
        $statusedit = $statusedit->update($request->only('name', 'created_by', 'updated-by'));
        if($statusedit) return redirect()->route('product-statuses.index')->with('success','Saved');
        return redirect()->back()->with('failed','Failed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductStatus  $productStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductStatus $productStatus)
    {
        $condition = Product::has('product_status')->count();
        if($condition > 0) {
            return redirect()->route('product_statuses.index')->with('warning', 'Do not delete it, this product type is used in {{$condition}} products!');
        }
        else {
            $statusdelete = ProductStatus::findOrFail($id);
            $statusdelete->delete();
            return redirect('')->route('product_statuses.index')->with('success', 'Deleted');
        }
    }
}
