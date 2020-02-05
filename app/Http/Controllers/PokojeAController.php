<?php

namespace App\Http\Controllers;

use App\Pokoje;
use Illuminate\Http\Request;

class PokojeAController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function listaP()
    {
        $pokoje = Pokoje::orderBy('id', 'DESC')-> paginate();

        return view('sites.listaP', compact('pokoje'));
    }
}
