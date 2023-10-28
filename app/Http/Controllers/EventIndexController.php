<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventIndexController extends Controller
{
    public function __invoke()
    {
        $events = Event::with('country', 'tags')->orderBy('created_at', 'desc')->paginate(12);
        return view('eventIndex', compact('events'));
    }
}
