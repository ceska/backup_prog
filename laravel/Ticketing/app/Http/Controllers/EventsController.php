<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

class EventsController extends Controller
{
    public function index()
    {
        $temp = Event::all();
        $events = $temp->sortBy('start_date');
        return view('events', compact('events'));
    }

    
    public function create()
    {
        return view('events.add');
    }

    public function store(Request $request)
    {
        $event = new Events();
        $event->name = $request->name;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->location = $request->location;
        $event->client_id = rand(1, 6); // get id of logged in user
        $event->status = "Available";
        $event->updated_at = now();
        $event->created_at = now();

        //$ticket = new Tickets();

        $event->save();
        return redirect('/events');
    }

    public function show(Events $event)
    {
        return view('events.index', compact('event'));
    }

    public function edit(Events $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Events $event)
    {
        $event->name = $request->name;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->location = $request->location;

        $event->save();
        return redirect('/events');
    }

    public function destroy(Events $event)
    {
        $event->delete();
        return redirect('/events');
    }

    public function refresh() // "unavailable" if past start date, "archived" if past end date
    {
        dd('hit me');
        $events = Event::all();
        foreach ($events as $event) 
        {
            $now = now()->format('Y-m-d');
            if (($event->start_date <= $now) and ($event->end_date) >= $now)
            {
                $event->status = "Unavailable";
                $event->save();
            } elseif (($event->start_date <= $now) and ($event->end_date <= $now))
            {
                $event->status = "Archived";
                $event->save();
            }
        }
        return redirect('/events');
    }
}
