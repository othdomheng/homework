<?php

namespace App\Http\Controllers;

use App\Models\ProductStatus;
use Illuminate\Http\Request;
use App\Http\Requests\ProductStatusRequest;

class ProductStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = ProductStatus::paginate(5);
        return view('product_status.index', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('product_status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStatusRequest $request)
    {
        $status = ProductStatus::create($request->only(['name']));
        if($status)
        return redirect()->back()->with('success', 'Saved');
        return redirect()->back()->with('failed', 'Saved');

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
        $data['status'] = ProductStatus::findOrFail($id);
        return view('product_status.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductStatus  $productStatus
     * @return \Illuminate\Http\Response
     */
    public function update($id, ProductStatusRequest $request)
    {
        $statusupdate = ProductStatus::findOrFail($id);
        $status = $statusupdate->update($request->only(['name']));
        if($status)
        return redirect()->back()->with('success', 'Saved');
        return redirect()->back()->with('failed', 'Saved');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductStatus  $productStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $statusdelete = ProductStatus::findOrFail($id);
        $statusdelete->delete();
        if($statusdelete)
        return redirect()->route('product-statuses.index')->with('success', 'Saved');
        return redirect()->route('product-statuses.index')->with('failed', 'Saved');

    }
}
