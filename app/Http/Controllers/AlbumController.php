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
            'album_listing_id' => ['required', 'exists:album_listings,id'],
        ]);
        Album::create($attributes);
        
        return redirect(route('admin.album'));
    }
}
