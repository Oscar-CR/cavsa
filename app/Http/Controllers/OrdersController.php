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
}
