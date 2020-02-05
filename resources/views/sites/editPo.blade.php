
@extends('layouts.admin')
@section('title') Edytowanie Pokoju @endsection
@section('content')

    {!! Form::model($rezerwacja, ['route' => ['sites.update', $rezerwacja], 'method' => 'PUT']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach
    @endif


    <div class="form-group">
        {!! Form::label('datarezerwacji', "Podaj Date Rezerwacji:") !!}
        {!! Form::date('datarezerwacji', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('kwotalaczna', "Cena:") !!}
        {!! Form::text('kwotalaczna', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dataod', "Podaj Date Od:") !!}
        {!! Form::date('dataod', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('datado', "Podaj Date Do:") !!}
        {!! Form::date('datado', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('nrpokoju', "Wybierz Pokój:") !!}
        {!! Form::text('nrpokoju', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('idklienta', "Dane Klienta:") !!}
        {!! Form::select('idklienta', $klients, null, ['id' => 'idklienta', 'class' => 'form-control custom-select']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('idstatusu', "Wybierz Status:") !!}
        {!! Form::select('idstatusu', $statuses, null, ['id' => 'idstatusu', 'class' => 'form-control custom-select']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>


    {!! Form::close() !!}

@endsection
