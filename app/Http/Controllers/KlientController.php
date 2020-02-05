<?php

namespace App\Http\Controllers;

use App\Klient;
use Illuminate\Http\Request;

class KlientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function listaK()
    {
        $klient = Klient::all();

        return view('sites.listaK', compact('klient'));
    }

    public function addKl()
    {
        return view('sites.addKl');
    }

    public function save(Request $request)
    {

    $klient = new Klient();
    $klient->imie = $request->input('imie');
    $klient->nazwisko = $request->input('nazwisko');
    $klient->pesel = $request->input('pesel');
    $klient->telefon = $request->input('telefon');
    $klient->adres = $request->input('adres');
$klient->save();
        return redirect()->route('rezerwacja.');
    }
}
