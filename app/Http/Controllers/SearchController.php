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
        $genres = AlbumListing::all()->pluck('genre')->unique()->take(5);
        if($selectedgenre == null)
        {
            if($search == null)
            {
                $albumlistings = AlbumListing::orderBy('release_date', 'DESC')->paginate(12);
            } else {
                $albumlistings = AlbumListing::orderBy('release_date', 'DESC')->where('name', 'like', '%' . $search . '%')->orWhere('artist', 'like', '%' . $search . '%')->paginate(12)->appends(request()->query());
            }
        } else {
            $albumlistings = AlbumListing::orderBy('release_date', 'DESC')->where('genre', $selectedgenre)->paginate(12)->appends(request()->query());
        }

        return view('music.index')->with('albumlistings', $albumlistings)->with('genres', $genres)->with('selectedgenre', $selectedgenre);
    }

    public function musicshow(AlbumListing $albumlisting)
    {
        $request = request()->input('format');
        $merch = ItemListing::where('name', 'like', '%' . $albumlisting->name . '%')->orWhere('keywords', 'like', '%' . $albumlisting->name . '%')->get();
        
        if($request == null){
            $releasetype = $albumlisting->albums->where('stock', '!=', "0")->first()->format;
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
        $types = ItemListing::all()->pluck('type')->unique()->take(5);
        $selectedtype = request()->input('type');
        $search = request()->input('search');

        if($selectedtype == null) {
            if($search == null)
            {
                $itemlistings = ItemListing::paginate(12);
            } else {
                $itemlistings = ItemListing::where('name', 'like', '%' . $search . '%')->orWhere('keywords', 'like', '%' . $search . '%')->paginate(12)->appends(request()->query());
            }
        } else {
            $itemlistings = ItemListing::where('type', $selectedtype)->paginate(12)->appends(request()->query());
        }
        
        return view('merch.index')->with('itemlistings', $itemlistings)->with('selectedtype', $selectedtype)->with('types', $types);
    }

    public function merchshow(ItemListing $itemlisting)
    {
        return view('merch.show')->with('itemlisting', $itemlisting);
    }
}
