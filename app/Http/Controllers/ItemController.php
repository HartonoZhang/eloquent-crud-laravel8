<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function addItem()
    {
        return view('add');
    }


    public function showItem()
    {
        $items = Item::orderBy('id', 'asc')->get();
        return view('show', compact('items'));
    }

    public function detailItem($id)
    {
        //$item = Item::find($id);
        $item = Item::where('id', $id)->first();
        return view('detail', compact('item'));
    }

    public function createItem(Request $request)
    {
        $item = new Item();
        $item->title = $request->title;
        $item->description = $request->description;
        $item->save();
        return back()->with('item-created', 'Item have been added!');
    }

    public function editItem($id)
    {
        $item = Item::find($id);
        return view('edit', compact('item'));
    }

    public function updateItem(Request $request)
    {
        $item = Item::find($request->id);
        $item->title = $request->title;
        $item->description = $request->description;
        $item->save();
        return back()->with('item-updated', 'Item have been updated!');
    }

    public function deleteItem($id)
    {
        $item = Item::where('id', $id)->delete();
        return back()->with('item-deleted', 'Item have been deleted!');
    }
}
