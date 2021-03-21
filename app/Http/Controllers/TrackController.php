<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\Disc;
use View;

class TrackController extends Controller
{
    public function index()
    {
        $tracks = Track::all();
        return View::make('admin.track.index')->with('tracks', $tracks);
    }

    public function create()
    {
        $discs = Disc::all();
        return View::make('admin.track.create')->with('discs', $discs);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'length' => ['required'],
            'disc_id' => ['required', 'exists:discs,id'],
        ]);
        Track::create($attributes);
        
        return redirect(route('admin.track'));
    }
}
