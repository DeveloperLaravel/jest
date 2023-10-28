<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventShowController extends Controller
{
    public function __invoke($id)
    {
        $event = Event::findOrFail($id);
        $like = $event->likes()->where('user_id', auth()->id())->first();

        return view('eventsShow', compact('event', 'like'));
    }
}
