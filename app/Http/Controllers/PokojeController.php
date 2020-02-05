<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokojeController extends Controller
{
    public function pokoje()
    {
        return view('sites.pokoje');
    }
}
