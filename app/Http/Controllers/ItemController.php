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
            'item_listing_id' => ['required'],
        ]);
        Item::create($attributes);
        
        return redirect(route('admin.item'));
    }
}
