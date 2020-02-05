@extends('layouts.app')

@section('content')

    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>

</head>
<body>



    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9831.786322388742!2d18.7898156!3d51.9713987!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4db8a0d51a8b1a2f!2sTermy%20Uniej%C3%B3w!5e0!3m2!1spl!2spl!4v1572971510308!5m2!1spl!2spl" width="1600" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <h1> <p align="left"
            > Kontakt </p></h1>

    <font size="5" align="left">Adres: Uniejów ul.Taka 6<br>Telefon: 661258963<br>Fax: 256982654</font>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v5.0"></script>



    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="1000" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>









    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

    <script type='text/javascript' src='scripts/jquery.min.js'></script>
    <script type='text/javascript' src='scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='scripts/camera.min.js'></script>

    <script>
        jQuery(function(){

            jQuery('#camera_wrap_1').camera({
                thumbnails: true
            });

            jQuery('#camera_wrap_2').camera({
                height: '400px',
                loader: 'bar',
                pagination: false,
                thumbnails: true
            });
        });
    </script>

</body>
</html>


@endsection
