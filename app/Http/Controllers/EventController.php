<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {

        $nome = "pedro";
        $arr = [1, 2, 3];
        $nomes = ['ana', 'carlos', 'pedro'];

        return view('welcome',
        [
            'nome' => $nome,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create(){
        return view('/events/create');
    }
}
