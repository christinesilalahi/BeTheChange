<?php

namespace App\Http\Controllers;

use App\Models\Event; // Assuming you have an Event model
use App\Models\PastEvent; // Assuming you have a PastEvent model
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch ongoing events
        $events = Event::where('date', '>=', Carbon::now())->get();

        // Fetch past events
        $past_events = PastEvent::where('date', '<', Carbon::now())->get();

        // Pass both variables to the view
        return view('homepage', [
            'events' => $events,
            'past_events' => $past_events,
        ]);
    }
}
