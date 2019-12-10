<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Models\ProductStatus;
use App\Models\Shape;
use App\Models\Zone;
use App\Model\ProductPriceHistory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->varShare = [
            'product_types'    => ProductType::get(),
            'product_statuses' => ProductStatus::get(),
            'shapes'   => Shape::get(),
            'zones'    => Zone::get(),
        ];
        view()->share($this->varShare);
    }
    public function index()
    {
        $data  = Product::with(['product_type', 'product_status','zone', 'shape'])->get();
        return view('products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data  = Product::with(['product_type', 'product_status','zone', 'shape'])->get();
        return view('products.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Product::create($request->only(
            [
                'name', 
                'code',
                'product_type_id', 
                'product_status_id', 
                'shape_id', 
                'zone_id', 
                'rent_price', 
                'sale_price', 
                'list_price', 
                'sold_price', 
                'created_by',
                'updated_by'
            ]
            ));
            if($create)
                return redirect()->back()->with('success', 'Saved');
                return redirect()->back()->with('failed', 'Failed in saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ['product_type', 'product_status', 'shape', 'zone'];
        $data['productedit'] = Product::findOrFail($id);
        return view('products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $old = Product::find($product->id);
        $product->update($request->only(
            [
                'name', 
                'code',
                'product_type_id', 
                'product_status_id', 
                'shape_id', 
                'zone_id', 
                'rent_price', 
                'sale_price', 
                'list_price', 
                'sold_price', 
                'created_by',
                'updated_by'
            ]
            ));

        $data['rent_price'] = $product->rent_price;
        $data['sale_price'] = $product->sale_price;
        $data['list_price'] = $product->list_price;
        $data['sold_price'] = $product->sold_price;
        if($old) {
            if($product->rent_price != $old->rent_price || $product->sale_price != $old->sale_price || $product->list_price != $old->list_price || $product->sold_price != $old->sold_price) {
                $data['rent_price'] = $old->rent_price;
                $data['sale_price'] = $old->sale_price;
                $data['list_price'] = $old->list_price;
                $data['sold_price'] = $old->sold_price;
                $product->productPriceHistory()->create($data);
            }
        } 
        else {
            if($new->rent_price || $new->sale_price || $new->list_price || $new->sold_price) $new->productPriceHistory()->create($data);
        }
        return redirect()->back()->with('success', 'Data Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productdelete = Product::findOrFail($id);
        $productdelete->productPriceHistory()->delete();
        $productdelete->delete();
        return redirect()->route('products.index')->with('success', 'Data is successfully deleted');
    }
}
