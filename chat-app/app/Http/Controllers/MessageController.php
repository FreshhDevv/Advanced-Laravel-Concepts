<?php

namespace App\Http\Controllers;

use App\Events\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        event(new Message(
            $request->input('username'),
            $request->input('message'),
        ));
    }
}
