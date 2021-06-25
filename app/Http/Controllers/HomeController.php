<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message as Message;

class HomeController extends Controller
{
    public function index()
    {
        $messages = Message::all();

        // foreach($messages as $message){
        //     echo $message->title;
        // }die;
        return view('home', [
            'messages' => $messages
        ]);
    }
}
