<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function show()
    {
        // Fetch ongoing or upcoming events (filter by date or other criteria if necessary)
        $events = Event::where('date', '>=', now())->get();

        return view('activity', ['events' => $events]);
    }
}
