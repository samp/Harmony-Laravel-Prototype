<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemListing;
use App\Models\Item;
use View;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return View::make('admin.item.index')->with('items', $items);
    }

    public function create()
    {
        $itemlistings = ItemListing::all();
        return View::make('admin.item.create')->with('itemlistings', $itemlistings);
    }

    public function store()
    {
        $attributes = request()->validate([
            'size' => ['required'],
            'item_listing_id' => ['required', 'exists:item_listings,id'],
        ]);

        Item::create($attributes);
        
        return redirect(route('admin.item'));
    }

    public function edit(Item $item)
    {
        $itemlistings = ItemListing::all();
        return View::make('admin.item.edit')->with('item', $item)->with('itemlistings', $itemlistings);
    }

    public function update(Item $item)
    {
        $attributes = request()->validate([
            'size' => ['required'],
            'item_listing_id' => ['required', 'exists:item_listings,id'],
        ]);

        $item->size = request()->get('size');
        $item->item_listing_id = request()->get('item_listing_id');

        $item->save();

        return redirect(route('admin.item'));
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return redirect(route('admin.item'));
    }
}
