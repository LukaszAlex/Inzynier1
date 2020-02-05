@extends('layouts.admin')
@section('title') Lista Pokoi @endsection
@section('content')

    <div class="page-header"><h1>Lista pokoi</h1></div>

    <table class="table table-hover">
        <th>Numer pokoju</th>
        <th>Cena</th>
        <th>Opis</th>
        <th>Status</th>
        <th>Status Pokoju</th>
        <th>Edycja</th>
        @foreach($pokoje as $pokoj)
            <tr>
                <td>{{$pokoj->nrpokoju}}</td>
                <td>{{$pokoj->cena}}</td>
                <td>{{$pokoj->pesel}}</td>
                <td>{{$pokoj->opis}}</td>
                <td>{{$pokoj->status->Nazwa}}</td>
                <td><a class="btn btn-info" href="{{route('sites.edit', $pokoje)}}">Edytuj</a></td>
            </tr>
        @endforeach
    </table>


@endsection
