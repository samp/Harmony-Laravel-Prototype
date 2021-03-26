<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlbumListing;
use App\Models\Album;
use View;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return View::make('admin.album.index')->with('albums', $albums);
    }

    public function create()
    {
        $albumlistings = AlbumListing::all();
        return View::make('admin.album.create')->with('albumlistings', $albumlistings);
    }

    public function store()
    {
        $attributes = request()->validate([
            'format' => ['required'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'numeric'],
            'album_listing_id' => ['required', 'exists:album_listings,id'],
        ]);
        Album::create($attributes);
        
        return redirect(route('admin.album'));
    }

    public function edit(Album $album)
    {
        $albumlistings = AlbumListing::all();
        return View::make('admin.album.edit')->with('album', $album)->with('albumlistings', $albumlistings);
    }

    public function update(Album $album)
    {
        $attributes = request()->validate([
            'format' => ['required'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'numeric'],
            'album_listing_id' => ['required', 'exists:album_listings,id'],
        ]);

        $album->format = request()->get('format');
        $album->price = request()->get('price');
        $album->stock = request()->get('stock');
        $album->album_listing_id = request()->get('album_listing_id');

        $album->save();

        return redirect(route('admin.album'));
    }

    public function destroy(Album $album)
    {
        $album->delete();

        return redirect(route('admin.album'));
    }
}
