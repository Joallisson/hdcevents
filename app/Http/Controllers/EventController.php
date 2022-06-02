<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {

        $events = Event::all(); //pega todos os registros do db

        return view('welcome', ['events' => $events]);
    }

    public function create(){
        return view('/events/create');
    }
}
