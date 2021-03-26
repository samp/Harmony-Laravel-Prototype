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

    public function show(Event $event)
    {
        return View::make('events.show')->with('event', $event);
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

    public function edit(Event $event)
    {
        return View::make('admin.event.edit')->with('event', $event);
    }

    public function update(Event $event)
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'artist' => ['required'],
            'description' => ['required'],
            'time' => ['required', 'date'],
            'location' => ['required'],
        ]);

        $event->name = request()->get('name');
        $event->artist = request()->get('artist');
        $event->description = request()->get('description');
        $event->time = request()->get('time');
        $event->location = request()->get('location');

        $event->save();

        return redirect(route('admin.event'));
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect(route('admin.event'));
    }
}
