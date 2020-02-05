<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RezerwacjaKlController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function rezerwacja()
    {
        return view('sites.rezerwacja');
    }
}
