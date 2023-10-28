<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class StoreCommentController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->comments()->create([
            'content' => $request->content,
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
