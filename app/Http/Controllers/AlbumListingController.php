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
            'genre' => ['required'],
            'release_date' => ['required', 'date'],
            'cover_image' => ['required', 'image']
        ]);

        $attributes['cover_image'] = request('cover_image')->store('albumcovers');

        AlbumListing::create($attributes);
        
        return redirect(route('admin.albumlisting'));
    }

    public function edit(AlbumListing $albumlisting)
    {
        return View::make('admin.albumlisting.edit')->with('albumlisting', $albumlisting);
    }

    public function update(AlbumListing $albumlisting)
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'artist' => ['required'],
            'description' => ['required'],
            'genre' => ['required'],
            'release_date' => ['required', 'date'],
        ]);

        $albumlisting->name = request()->get('name');
        $albumlisting->artist = request()->get('artist');
        $albumlisting->description = request()->get('description');
        $albumlisting->genre = request()->get('genre');
        $albumlisting->release_date = request()->get('release_date');

        $albumlisting->save();

        return redirect(route('admin.albumlisting'));
    }

    public function destroy(AlbumListing $albumlisting)
    {
        $albumlisting->delete();

        return redirect(route('admin.albumlisting'));
    }
}
