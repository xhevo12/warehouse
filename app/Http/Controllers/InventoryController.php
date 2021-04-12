<?php

namespace App\Http\Controllers;

use App\Http\Resources\InventoryResource;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {

        $invent = Inventory::all();
        return InventoryResource::collection($invent);
    }
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventorys = new Inventory;
       
        $inventorys->name = $request->input('name');
        $inventorys->art_id = $request->input('art_id');
        $inventorys->stock = $request->input('stock');
        $inventorys->save();
        return new InventoryResource($inventorys);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventrory  $inventroy
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        return new InventoryResource($inventory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventroy  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $inventory)
    {
        $inventorys =Inventory::find($inventory);
        $inventorys->price = $request->input('price');
        $inventorys->name = $request->input('name');
        $inventorys->art_id = $request->input('art_id');
        $inventorys->save();
        return new InventoryResource($inventorys);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventroy
     * @return \Illuminate\Http\Response
     */
    public function destroy($inventory)
    {
        $inventorys = Inventory::findOrfail($inventory);
        $inventorys->delete();
    }
}
