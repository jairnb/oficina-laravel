<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>
<body>

    @section('main-content')
        @show



    @include('partials.javascripts')
</body>
</html>