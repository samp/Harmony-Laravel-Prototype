<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use View;

class CarouselController extends Controller
{
    public function index()
    {
        $carousel = Carousel::all();
        return View::make('admin.carousel.index')->with('carousel', $carousel);
    }

    public function create()
    {
        return View::make('admin.carousel.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'image' => ['required', 'image'],
            'description' => ['required'],
            'link' => ['required']
        ]);

        $attributes['image'] = request('image')->store('carousel');

        Carousel::create($attributes);
        
        return redirect(route('admin.carousel'));
    }

    public function edit(Carousel $carousel)
    {
        return View::make('admin.carousel.edit')->with('carousel', $carousel);
    }

    public function update(Carousel $carousel)
    {
        $attributes = request()->validate([
            'description' => ['required'],
            'link' => ['required']
        ]);

        $carousel->description = request()->get('description');
        $carousel->link = request()->get('link');

        $carousel->save();

        return redirect(route('admin.carousel'));
    }

    public function destroy(Carousel $carousel)
    {
        $carousel->delete();

        return redirect(route('admin.carousel'));
    }
}
