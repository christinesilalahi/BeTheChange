<?php

namespace App\Http\Controllers;

use App\Models\PastEvent;
use Illuminate\Http\Request;

class PastEventController extends Controller
{
    //
    public function allPastEvents(){
        $past_events = PastEvent::all();
        return view('past-events.index', compact('past_events'));
    }

    public function getPastEvent($id){
        $past_event = PastEvent::findOrFail($id);
        $volunteers = $past_event->participators;
        $organizer = $past_event->organizer;
        return view('past-events.detail', compact('past_event', 'volunteers', 'organizer'));
    }
}
