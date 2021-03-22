<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlbumListing;
use App\Models\ItemListing;
use App\Models\Event;

class IndexController extends Controller
{
    public function index()
    {
        $albumlistings = AlbumListing::all();
        $itemlistings = ItemListing::all();
        $events = Event::all();
        return view('index', ['albumlistings' => $albumlistings, 'itemlistings' => $itemlistings, 'events' => $events]);
    }
}
