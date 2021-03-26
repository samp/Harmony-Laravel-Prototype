<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlbumListing;
use App\Models\ItemListing;
use App\Models\Carousel;
use App\Models\Event;

class IndexController extends Controller
{
    public function index()
    {
        $albumlistings = AlbumListing::orderBy('release_date', 'DESC')->get()->take(4);
        $itemlistings = ItemListing::orderBy('created_at', 'DESC')->get()->take(2);
        $events = Event::where('time', '>=', date('Y-m-d'))->orderBy('time', 'ASC')->get()->take(2);
        $carousel = Carousel::all();
        return view('index', ['albumlistings' => $albumlistings, 'itemlistings' => $itemlistings, 'events' => $events, 'caroutsel' => $carousel]);
    }
}
