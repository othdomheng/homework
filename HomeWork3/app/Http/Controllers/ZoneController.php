<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;
use App\Models\Product;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zone = Zone::paginate(5);
        return view('zones.index', compact('zone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('zones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Zone::create($request->all());
        if($create)
            return redirect()->back()->with('success', 'Saved');
            return redirect()->back()->with('failed', 'Failed in saving data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function show(Zone $zone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data['zoneedit'] = Zone::findOrFail($id);
        return view('zones.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $zoneedit = Zone::findOrFail($id);
        $zoneedit = $zoneedit->update($request->only('name', 'created_by', 'updated-by'));
        if($zoneedit) return redirect()->route('zones.index')->with('success','Saved');
        return redirect()->back()->with('failed','Failed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        $condition = Product::has('zone')->count();
        if($condition > 0) {
            return redirect()->route('zones.index')->with('warning', 'Do not delete it, this zone is used in {{$condition}} products!');
        }
        else {
            $zonedelete = Zone::findOrFail($id);
            $zonedelete->delete();
            return redirect()->route('zones.index')->with('success', 'Deleted');
        }
    }
}
