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
        return $albumlisting;
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
