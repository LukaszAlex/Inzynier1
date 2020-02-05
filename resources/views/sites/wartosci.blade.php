@extends('layouts.admin')

@section('title') Rezerwacja @endsection

@section('content')

    <h1>Rezerwacja numer: {{$site->id}} Rezerwacja na: {{$site->idklienta}}</h1>
    <h1>Data Rezrwacji: {{$site->datarezerwacji}}</h1>
    <h1>Data Przyjazdu: {{$site->dataod}}</h1>
    <h1>Data Odjazdu: {{$site->datado}}</h1>
    <h1>Kwota Łączna: {{$site->kwotalaczna}}</h1>
    <h1>Numer Pokoju: {{$site->nrpokoju}}</h1>
    <h1>Status: {{$site->idstatusu}}</h1>

    <div class="form-group">

        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-primary']) !!}
    </div>


@endsection
