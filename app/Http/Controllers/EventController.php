<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\PastEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function allevent()
    {
        $event = Event::all(); 

        return view('event', ['event' => $event]);
    }

    public function homepage(){
        $events = Event::latest()->get()->take(4);
        $past_events = PastEvent::latest()->take(4);
        return view('homepage', compact('events', 'past_events'));
    }
}

