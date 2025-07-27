<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function search(Request $request)
    {

        $query = $request->input('query');

        $items = Item::where('name', 'LIKE', "%{$query}%")->orWhere('status', 'LIKE', "%{$query}%")->paginate(5);

        return view("item.index", compact('items'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::paginate(5);
        $categories = Category::all();
        return view('item.index', compact('items', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('item.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->image) {
            $file = $request->image;
            $newName = "item_image" . uniqid() . "." . $file->extension();

            $file->storeAs('itemImage', $newName);
        }

        $item = new Item();

        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->description = $request->description;
        $item->image = $request->image;
        $item->status = $request->status;
        $item->category_id = $request->category_id;
        $item->image = $newName;
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
            return view('item.edit', compact('item', 'categories'));
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

            if ($request->image) {
                $file = $request->image;
                $newName = "item_image" . uniqid() . "." . $file->extension();

                $file->storeAs('itemImage', $newName);
                $item->image = $newName;
            }
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
