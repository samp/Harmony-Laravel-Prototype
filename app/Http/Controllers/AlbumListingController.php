<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlbumListing;
use View;

class AlbumListingController extends Controller
{
    public function index()
    {
        $albumlistings = AlbumListing::all();
        return View::make('admin.albumlisting.index')->with('albumlistings', $albumlistings);
    }

    public function create()
    {
        return View::make('admin.albumlisting.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'artist' => ['required'],
            'description' => ['required'],
            'cover_image' => ['required', 'image']
        ]);

        $attributes['cover_image'] = request('cover_image')->store('albumcovers');

        AlbumListing::create($attributes);
        
        return redirect(route('admin.albumlisting'));
    }
}
