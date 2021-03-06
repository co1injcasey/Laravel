<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message as Message;
// use Illuminate\Support\Facades\Request;

class MessageContoller extends Controller
{
    public function create(Request $request) {

        $message = new Message();
        $message->title = $request->title;
        $message->content = $request->content;

        $message->save(); 

        return redirect('/');
    }

    public function view($id) {

        $message = Message::findOrFail($id);

        return view('message', [
            'message' => $message
        ]);
    }
}
