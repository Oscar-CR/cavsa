<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobreController extends Controller
{
    public function cobre() {
        return view('cobre.index');
    }
}
