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
            'album_id' => ['required', 'exists:albums,id'],
            'name' => ['required'],
        ]);
        Disc::create($attributes);
        
        return redirect(route('admin.disc'));
    }

    public function edit(Disc $disc)
    {
        $albums = Album::all();
        return View::make('admin.disc.edit')->with('disc', $disc)->with('albums', $albums);
    }

    public function update(Disc $disc)
    {
        $attributes = request()->validate([
            'album_id' => ['required', 'exists:albums,id'],
            'name' => ['required'],
        ]);

        $disc->album_id = request()->get('album_id');
        $disc->name = request()->get('name');

        $disc->save();

        return redirect(route('admin.disc'));
    }

    public function destroy(Disc $disc)
    {
        $disc->delete();

        return redirect(route('admin.disc'));
    }
}
