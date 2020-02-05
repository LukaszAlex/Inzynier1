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

    <img class="img-fluid glowna" src="{{asset('img/01.jpg')}}" alt="" style="">



    <Strong><h1> <p align="center"
            > Hotel Uniejów Zaprasza </p></h1></Strong>



    <table width="800" height="300" align="right" ><tr>
            <td> <p align="center">ART Hostel Uniejowie jest zlokalizowany w centrum miasta, dzięki czemu można z niego wygodnie dojechać w praktycznie dowolne miejsce. Stary Rynek oddalony jest od niego o jedynie 800 m, a ponadto, w bliskiej odległości mieszczą się również liczne knajpy, puby i miejsca kulturalno-rozrywkowych. Nasze kwatery są też świetną propozycją dla osób przyjeżdżających na Międzynarodowe Targi Poznańskie, gdyż dzieli je od tego miejsca tylko 1 km.
                    Oferujemy nie tylko wygodne i tanie noclegi w Uniejowie, ale też gwarantujemy miłą i w pełni profesjonalną obsługę. Znamy kilka języków obcych i pracujemy przez całą dobę, aby zawsze służyć gościom pomocą. Mamy nadzieję, że wizyta w naszym hostelu będzie dla Państwa przyjemna i zaowocuje kolejnym przybyciem.
                </p> </td></tr>
    </table>

    <img class="img-fluid park" src="{{asset('img/park.jpg')}}" style=""/>

    <table width="800" height="300" align="left" ><tr>
            <td> <p align="center">ART Hostel Uniejowie jest zlokalizowany w centrum miasta, dzięki czemu można z niego wygodnie dojechać w praktycznie dowolne miejsce. Stary Rynek oddalony jest od niego o jedynie 800 m, a ponadto, w bliskiej odległości mieszczą się również liczne knajpy, puby i miejsca kulturalno-rozrywkowych. Nasze kwatery są też świetną propozycją dla osób przyjeżdżających na Międzynarodowe Targi Poznańskie, gdyż dzieli je od tego miejsca tylko 1 km.
                    Oferujemy nie tylko wygodne i tanie noclegi w Uniejowie, ale też gwarantujemy miłą i w pełni profesjonalną obsługę. Znamy kilka języków obcych i pracujemy przez całą dobę, aby zawsze służyć gościom pomocą. Mamy nadzieję, że wizyta w naszym hostelu będzie dla Państwa przyjemna i zaowocuje kolejnym przybyciem.
                </p> </td></tr>
    </table>

    <img class="img-fluid kreg" src="{{asset('img/kreg.jpg')}}" style=""/>

    <footer class="blockquote-footer" align="center">
        <p>Praca inżynierska 2020</a>.</p>

    </footer>



</body>
</html>

@endsection
