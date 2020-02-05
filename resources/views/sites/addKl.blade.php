@extends('layouts.admin')
@section('title') Dodawanie Klienta @endsection
@section('content')

    <div class="page-header"><h1>Dodaj Klienta</h1></div>

    {!! Form::open(['route' => 'klient.save']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach
    @endif



    <div class="form-group">
        {!! Form::label('imie', "Podaj Imie:") !!}
        {!! Form::text('imie', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('nazwisko', "Podaj Nazwisko:") !!}
        {!! Form::text('nazwisko', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('pesel', "Podaj Pesel:") !!}
        {!! Form::text('pesel', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telefon', "Podaj Telefon:") !!}
        {!! Form::text('telefon', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('adres', "Podaj Adres:") !!}
        {!! Form::text('adres', null, ['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>


    {!! Form::close() !!}

@endsection
