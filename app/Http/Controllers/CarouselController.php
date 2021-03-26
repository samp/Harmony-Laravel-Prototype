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
}
