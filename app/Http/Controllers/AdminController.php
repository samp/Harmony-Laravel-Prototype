<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlbumListing;
use View;

class AdminController extends Controller
{
    public function index()
    {
        $albumlistings = AlbumListing::all();
        return View::make('admin.index')->with('albumlistings', $albumlistings);
    }
}
