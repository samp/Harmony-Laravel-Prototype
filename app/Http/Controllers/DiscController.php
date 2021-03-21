<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Disc;
use View;

class DiscController extends Controller
{
    public function index()
    {
        $discs = Disc::all();
        return View::make('admin.disc.index')->with('discs', $discs);
    }

    public function create()
    {
        $albums = Album::all();
        return View::make('admin.disc.create')->with('albums', $albums);
    }

    public function store()
    {
        $attributes = request()->validate([
            'album_id' => ['required'],
            'name' => ['required'],
        ]);
        Disc::create($attributes);
        
        return redirect(route('admin.disc'));
    }
}
