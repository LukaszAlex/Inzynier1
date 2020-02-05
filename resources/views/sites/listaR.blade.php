@extends('layouts.admin')

@section('title') Lista Rezerwacji @endsection

@section('content')
    <div class="page-header"><h1>Lista Rezerwacji</h1></div>

    <div class="col-12 text-right">
        <a class="btn btn-primary"  href="{{route('rezerwacja.addRe')}}" >Dodaj Rezerwacje</a>
    </div>


    <table class="table table-hover">
        <th>Numer Rezerwacji</th>
        <th>Data Rezrwacji</th>
        <th>Kwota Łączna</th>
        <th>Data Od</th>
        <th>Data Do</th>
        <th>Numer Pokoju</th>
        <th>Klient</th>
        <th>Status</th>
        <th>Edycja</th>
        <th>Usuwanie</th>

        @foreach($rezerwacja as $rezerwacja)

            <tr>
                <td><a href="{{route('rezerwacja.show', $rezerwacja)}}">{{$rezerwacja->id}}</a></td>
                <td>{{$rezerwacja->datarezerwacji}}</td>
                <td>{{$rezerwacja->kwotalaczna}}</td>
                <td>{{$rezerwacja->dataod}}</td>
                <td>{{$rezerwacja->datado}}</td>
                <td>{{$rezerwacja->nrpokoju}}</td>
                <td>{{$rezerwacja->client->imie}} {{$rezerwacja->client->nazwisko}}</td>
                <td>{{$rezerwacja->status->Nazwa}}</td>
                <td><a class="btn btn-info" href="{{route('sites.edit', $rezerwacja)}}">Edytuj</a></td>
                <td>
                    {!! Form::model($rezerwacja, ['route' => ['sites.delete', $rezerwacja], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Usuń</button>
                    {!! Form::close() !!}
                </td>
            </tr>

        @endforeach
    </table>
    @endsection
