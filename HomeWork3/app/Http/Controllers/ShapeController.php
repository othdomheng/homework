<?php

namespace App\Http\Controllers;

use App\Models\Shape;
use Illuminate\Http\Request;
use App\Models\Product;

class ShapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shape = Shape::paginate(5);
        return view('shapes.index', compact('shape'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shapes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Shape::create($request->all());
        if($create)
            return redirect()->back()->with('success', 'Saved');
            return redirect()->back()->with('failed', 'Failed in saving data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shape  $shape
     * @return \Illuminate\Http\Response
     */
    public function show(Shape $shape)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shape  $shape
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data['shapeedit'] = Shape::findOrFail($id);
        return view('shapes.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shape  $shape
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $shapeedit = Shape::findOrFail($id);
        $shapeedit = $shapeedit->update($request->only('name', 'created_by', 'updated-by'));
        if($shapeedit) return redirect()->route('shapes.index')->with('success','Saved');
        return redirect()->back()->with('failed','Failed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shape  $shape
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $condition = Product::has('shape')->count();
        if($condition > 0) {
            return redirect()->route('shapes.index')->with('warning', 'Do not delete it, this shape is used in product!');
        }
        else {
            $shapedelete = Shape::findOrFail($id);
            $shapedelete->delete();
            return redirect()->route('shapes.index')->with('success', 'Deleted');
        }
    
    }
}
