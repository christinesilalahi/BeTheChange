<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show()
    {
        $event = Event::first(); 

        return view('event', ['event' => $event]);
    }

}

