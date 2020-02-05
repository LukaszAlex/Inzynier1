@extends('layouts.admin')
@section('title') Lista Klientów @endsection
@section('content')
    <div class="page-header"><h1>Lista Klientów</h1></div>

<table class="table table-hover">
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Pesel</th>
    <th>Telefon</th>
    <th>Adres</th>
    @foreach($klient as $klient)
        <tr>
        <td>{{$klient->imie}}</td>
        <td>{{$klient->nazwisko}}</td>
        <td>{{$klient->pesel}}</td>
        <td>{{$klient->telefon}}</td>
        <td>{{$klient->adres}}</td>
    </tr>
        @endforeach
</table>

    @endsection
