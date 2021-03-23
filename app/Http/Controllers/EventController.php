<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use View;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('time', '>=', date('Y-m-d'))->orderBy('time', 'ASC')->paginate(4);
        return View::make('events.index')->with('events', $events);
    }

    public function adminindex()
    {
        $events = Event::all();
        return View::make('admin.event.index')->with('events', $events);
    }

    public function create()
    {
        return View::make('admin.event.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'artist' => ['required'],
            'description' => ['required'],
            'time' => ['required', 'date'],
            'location' => ['required'],
            'image' => ['required', 'image']
        ]);

        $attributes['image'] = request('image')->store('events');

        Event::create($attributes);
        
        return redirect(route('admin.event'));
    }
}
