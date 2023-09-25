<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function fibra() {
        return view('fibra.index');
    }

    public function cobre() {
        return view('cobre.index');
    }

    public function fibraCreate(){
        return view('fibra.create');
    }

    public function cobreCreate(){
        return view('cobre.create');
    }

    public function fibraStore(){
        return view('fibra.create');
    }

    
}
