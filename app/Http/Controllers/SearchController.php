<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlbumListing;
use App\Models\ItemListing;

class SearchController extends Controller
{
    public function musicindex()
    {
        $selectedgenre = request()->input('genre');
        $search = request()->input('search');
        $genres = AlbumListing::all()->pluck('genre')->unique();
        if($selectedgenre == null)
        {
            if($search == null)
            {
                $albumlistings = AlbumListing::all();
            } else {
                $albumlistings = AlbumListing::where('name', 'like', '%' . $search . '%')->orWhere('artist', 'like', '%' . $search . '%')->get();
            }
        } else {
            $albumlistings = AlbumListing::where('genre', $selectedgenre)->get();
        }

        return view('music.index')->with('albumlistings', $albumlistings)->with('genres', $genres)->with('selectedgenre', $selectedgenre);
    }

    public function musicshow(AlbumListing $albumlisting)
    {
        $request = request()->input('format');
        $merch = ItemListing::where('name', 'like', '%' . $albumlisting->name . '%')->orWhere('keywords', 'like', '%' . $albumlisting->name . '%')->get();
        
        if($request == null){
            $releasetype = $albumlisting->albums->first()->format;
        } else
        {
            $releasetype = $request;
        }
        $album = $albumlisting->albums->where('format', $releasetype)->first();

        if($album == null) {
            abort(404);
        }
        return view('music.show')->with('albumlisting', $albumlisting)->with('selectedalbum', $album)->with('merch', $merch);
    }

    public function merchindex()
    {
        $search = request()->input('search');
        if($search == null)
            {
                $itemlistings = ItemListing::all();
            } else {
                $itemlistings = ItemListing::where('name', 'like', '%' . $search . '%')->orWhere('keywords', 'like', '%' . $search . '%')->get();
            }
        return view('merch.index')->with('itemlistings', $itemlistings);
    }

    public function merchshow(ItemListing $itemlisting)
    {
        return $itemlisting;
    }
}
