<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\PastEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function allEvents(){
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function getEvent($id){
        $event = Event::findOrFail($id);
        $volunteers = $event->volunteers;
        $organizer = $event->organizer;
        return view('events.detail', compact('event', 'volunteers', 'organizer'));
    }

    public function homeController(){
        $events = Event::latest()->get()->take(4);
        $past_events = PastEvent::latest()->get()->take(4);
        return view('home', compact('events', 'past_events'));
    }
}
