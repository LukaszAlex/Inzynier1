<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlownaController extends Controller
{
    public function glowna()
    {
        return view('sites.glowna');
    }
}
