<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreItemsRequest;
use App\Http\Requests\UpdateItemsRequest;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('items.index', ['items' => Items::paginate(10)]);
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
    public function update(UpdateItemsRequest $request, $id)
    {
        $item = Items::find('id');
        // if ($item){
            $item->name =  $request->name;
            $item->desc =  $request->desc;
            $item->price =  $request->price;
            $item->total =  $request->total;
            $item->save();
    //     }else{
    //         return response()->json(['error' => $item], 404);
    //     }
        
        return redirect()->route('item.index')->with('success','update');
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
