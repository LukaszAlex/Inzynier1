@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Stona główna') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>


</head>
<body>

<img class="img-fluid zdj" src="{{asset('img/2os.jpg')}}" style=""/>
<img class="img-fluid zdj1os" src="{{asset('img/1os.jpg')}}" style=""/>
<img class="img-fluid zdj3os" src="{{asset('img/3os.jpg')}}" style=""/>
<img class="img-fluid zdj5os" src="{{asset('img/5os.jpg')}}" style=""/>


<footer class="blockquote-footer" align="center">
    <p>Praca inżynierska 2020</a>.</p>

</footer>

</body>
</html>
@endsection
