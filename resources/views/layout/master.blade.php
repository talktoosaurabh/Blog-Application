<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="title" content="@yield('pageTitle')" />
    <meta name="description" content="">
    <meta name="title" content="Laravel Blog" />
    <meta name="author" content="ngSchool" />
    <meta name="google" value="notranslate">
    <title>@yield('pageTitle')</title>
    <link rel="icon" type="image/png" href="{{ URL::asset('favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>

    @yield('content')

    <script src="{{ URL::asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    @yield('script')

   <link href="{{ URL::asset('js/jquery-3.6.0.min.js') }}" rel="stylesheet">
   <link href="{{ URL::asset('css/bootstrap.min.js') }}" rel="stylesheet">
   <link href="{{ URL::asset('js/project.js') }}" rel="script">
</body>
</html>
