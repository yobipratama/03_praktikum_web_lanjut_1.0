<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/favicon.png"/>
        <title>@yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('fonts/antonio-exotic/stylesheet.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/lightbox.min.css')}}">
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
        <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/lightbox-plus-jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/instafeed.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
    </head>
    <body>
        <div id="page">
            @include('navbar')
            @yield('content')
            @include('footer')
        </div>
        @yield('js')
    </body>
</html>
