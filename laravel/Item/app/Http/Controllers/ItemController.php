<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        $categories = Category::all();
        return view('item.index', compact('items','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('item.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Item();

        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->description = $request->description;
        $item->status = $request->status;
        $item->category_id = $request->category_id;
        $item->save();

        return redirect()->route("item.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Item::find($id);
        $categories = Category::all();
        if ($item) {
            return view('item.edit', compact('item','categories'));
        } else {
            return redirect()->route('item.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Item::find($id);
        if ($item) {
            $item->name = $request->name;
            $item->price = $request->price;
            $item->stock = $request->stock;
            $item->description = $request->description;
            $item->status = $request->status;
            $item->category_id = $request->category_id;
            $item->update();
            return redirect()->route('item.index');
        } else {
            return redirect()->route('item.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::find($id);
        if ($item) {
            $item->delete();
            return redirect()->route('item.index');
        } else {
            return redirect()->route('item.index');
        }
    }
}
