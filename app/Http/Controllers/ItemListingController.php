<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemListing;
use View;

class ItemListingController extends Controller
{
    public function index()
    {
        $itemlistings = ItemListing::all();
        return View::make('admin.itemlisting.index')->with('itemlistings', $itemlistings);
    }

    public function create()
    {
        return View::make('admin.itemlisting.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'keywords' => ['required'],
            'price' => ['required', 'numeric'],
            'product_image' => ['required', 'image']
        ]);

        $attributes['product_image'] = request('product_image')->store('productimages');

        ItemListing::create($attributes);
        
        return redirect(route('admin.itemlisting'));
    }
}
