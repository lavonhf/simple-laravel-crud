<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreItemsRequest;
use App\Http\Requests\UpdateItemsRequest;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('items.index', ['items' => Items::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemsRequest $request)
    {
        Items::create($request->all());
        return redirect()->route('items.index')->with('success','create itam');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {   
        $item = Items::findOrFail($id);
        return view('items.show',compact('item'));    

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Items $item)
    {
        return view('items.edit', ['items' => $item]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemsRequest $request, Items $items) : RedirectResponse
    {
        // $item = Items::findOrFail($items->id);

        // $item->name = $request->get('name');
        // $item->desc = $request->get('desc');
        // $item->price = $request->get('price');
        // $item->total = $request->get('total');

        // $item->save();
        

        // $item->update([

        $interest = Items::where(['id' =>  $request->id])->first();

    if ($interest) {
        $interest->delete();
    };           

        Items::firstOrCreate([
            'name' => $request->name,
            'desc' => $request->desc,
            'price' => $request->price,
            'total' => $request->total,
        ]);
        // ]);

        // $items->name = $request->name;
        // $items->desc = $request->desc;
        // $items->price = $request->price;
        // $items->total = $request->total;
 
        // $item->save();

        return redirect()->route('items.index')->with('success','update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Items $items)
    {
        $items->delete();
        return redirect()->route('items.index')->with('success','delelt');
    }
}
