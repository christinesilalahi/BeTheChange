<?php

namespace App\Http\Controllers;

use App\Models\PastEvent;
use App\Http\Requests\StorePastEventRequest;
use App\Http\Requests\UpdatePastEventRequest;

class PastEventController extends Controller
{
    
    public function show()
    {
        $past_event = PastEvent::all(); 

        return view('detail-report', ['past_event' => $past_event]);
    }

}
