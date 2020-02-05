

@extends('layouts.admin')
        @section('title') Dodawanie Rezerwacji @endsection
        @section('content')

            {!! Form::open(['route' => 'rezerwacja.saveRe']) !!}

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="btn btn-danger">{{ $error }}</div>
                @endforeach
            @endif


            <div class="form-group">
                {!! Form::label('datarezerwacji', "Podaj date rezerwacji:") !!}
                {!! Form::date('datarezerwacji', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('kwotalaczna', "Cena:") !!}
                {!! Form::text('kwotalaczna', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('dataod', "Podaj date przyjazdu:") !!}
                {!! Form::date('dataod', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('datado', "Podaj date odjazdu:") !!}
                {!! Form::date('datado', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('nrpokoju', "Wybierz pokój:") !!}
                {!! Form::text('nrpokoju', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('idklienta', "Dane klienta:") !!}
                {!! Form::select('idklienta', $klients, null, ['id' => 'idklienta', 'class' => 'form-control custom-select']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('idstatusu', "Wybierz status:") !!}
                {!! Form::select('idstatusu', $statuses, null, ['id' => 'idstatusu', 'class' => 'form-control custom-select']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
                {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
            </div>


            {!! Form::close() !!}

        @endsection
