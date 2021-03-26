<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlbumListing;
use App\Models\ItemListing;
use App\Models\Event;
use App\Models\Carousel;
use View;

class AdminController extends Controller
{
    public function index()
    {
        $albumlistings = AlbumListing::all();
        $itemlistings = ItemListing::all();
        $events = Event::all();
        $carousel = Carousel::all();
        return View::make('admin.index')->with('albumlistings', $albumlistings)->with('itemlistings', $itemlistings)->with('events', $events)->with('carousel', $carousel);
    }
}
