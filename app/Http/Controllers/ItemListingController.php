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
            'type' => ['required'],
            'description' => ['required'],
            'product_image' => ['required', 'image']
        ]);

        $attributes['product_image'] = request('product_image')->store('productimages');

        ItemListing::create($attributes);
        
        return redirect(route('admin.itemlisting'));
    }

    public function edit(ItemListing $itemlisting)
    {
        return View::make('admin.itemlisting.edit')->with('itemlisting', $itemlisting);
    }

    public function update(ItemListing $itemlisting)
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'keywords' => ['required'],
            'price' => ['required', 'numeric'],
            'type' => ['required'],
            'description' => ['required'],
        ]);

        $itemlisting->name = request()->get('name');
        $itemlisting->keywords = request()->get('keywords');
        $itemlisting->price = request()->get('price');
        $itemlisting->type = request()->get('type');
        $itemlisting->description = request()->get('description');

        $itemlisting->save();

        return redirect(route('admin.itemlisting'));
    }

    public function destroy(ItemListing $itemlisting)
    {
        $itemlisting->delete();

        return redirect(route('admin.itemlisting'));
    }
}
