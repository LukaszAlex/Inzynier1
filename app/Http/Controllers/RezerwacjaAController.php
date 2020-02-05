<?php

namespace App\Http\Controllers;
use App\Status;
use App\Klient;
use App\Rezerwacja;
use Illuminate\Http\Request;
use App\Http\Requests\RezerwacjaRequest;

class RezerwacjaAController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function listaR()
    {
        $rezerwacja = Rezerwacja::orderBy('id', 'DESC')-> paginate();

        return view('sites.listaR', compact('rezerwacja'));
    }

    public function addRe()
    {
        $statuses = Status::get();
        $statusarray = array();
        foreach ($statuses as $status) {
            $statusarray[$status->id] = $status->Nazwa;
        }

            $klients = Klient::get();
            $klientarray = array();
            foreach ($klients as $klient) {
                $klientarray[$klient->id] = $klient->imie . ' ' . $klient->nazwisko;
            }

            return view('sites.addRe')->with('statuses', $statusarray)->with('klients', $klientarray);
        }

    public function saveRe(RezerwacjaRequest $request)
    {
        //dd($request->all());
        $rezerwacja = new Rezerwacja();

        $rezerwacja->datarezerwacji = $request->input('datarezerwacji');
        $rezerwacja->kwotalaczna = $request->input('kwotalaczna');
        $rezerwacja->dataod = $request->input('dataod');
        $rezerwacja->datado = $request->input('datado');
        $rezerwacja->nrpokoju = $request->input('nrpokoju');
        $rezerwacja->idklienta = $request->input('idklienta');
        $rezerwacja->idstatusu = $request->input('idstatusu');
        $rezerwacja->save();

        return redirect()->route('rezerwacja.');
    }

    public function show(Rezerwacja $site)
    {
        return view('sites.wartosci', compact('site'));
    }

    public function edit(Rezerwacja $rezerwacja)
    {
        $statuses = Status::get();
        $statusarray = array();
        foreach ($statuses as $status) {
            $statusarray[$status->id] = $status->Nazwa;
        }

        $klients = Klient::get();
        $klientarray = array();
        foreach ($klients as $klient) {
            $klientarray[$klient->id] = $klient->imie . ' ' . $klient->nazwisko;
        }

        return view('sites.edit', compact('rezerwacja'))->with('statuses', $statusarray)->with('klients', $klientarray);
    }

    public function update(Request $request, Rezerwacja $rezerwacja)
    {
        $rezerwacja->update($request->all());
        return redirect()->route('sites.listaR');
    }

    public function destroy(Rezerwacja $rezerwacja)
    {
        $rezerwacja->delete();
        return redirect()->route('sites.listaR');
    }
}
