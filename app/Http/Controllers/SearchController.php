<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlbumListing;
use App\Models\ItemListing;

class SearchController extends Controller
{
    public function musicindex()
    {
        $albumlistings = AlbumListing::all();
        return view('music.index')->with('albumlistings', $albumlistings);
    }

    public function musicshow(AlbumListing $albumlisting)
    {
        $request = request()->input('format');
        
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
        return view('music.show')->with('albumlisting', $albumlisting)->with('selectedalbum', $album);
    }

    public function merchindex()
    {
        $itemlistings = ItemListing::all();
        return view('merch.index')->with('itemlistings', $itemlistings);
    }

    public function merchshow(ItemListing $itemlisting)
    {
        return $itemlisting;
    }
}
