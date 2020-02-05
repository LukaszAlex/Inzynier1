@extends('layouts.app')

@section('content')
    <form action="rezerwacja.php" method="post">
        Data przyjazdu:<br />
        <input type="date" name="dataod" value="" ><br /> <br />
        Data wyjazdu:<br />
        <input type="date" name="datado" value="" ><br /> <br />

        <input type="submit" value="Sprawdź wolne pokoje">
    </form>

@endsection
