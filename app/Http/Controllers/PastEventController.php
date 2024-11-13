<?php

namespace App\Http\Controllers;

use App\Models\PastEvent;
use App\Http\Requests\StorePastEventRequest;
use App\Http\Requests\UpdatePastEventRequest;

class PastEventController extends Controller
{
    
    // public function show()
    // {
    //     $past_event = PastEvent::first(); 

    //     return view('detail-report', ['past_event' => $past_event]);
    // }

    public function show()
{
    // Fetch completed events
    $past_events = PastEvent::where('date', '<', now())->get();

    // Pass the variable to the view
    return view('history-activity', ['past_events' => $past_events]);
}

}
