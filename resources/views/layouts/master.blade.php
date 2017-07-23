<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icon.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/FontAwesome.otf">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.eot">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.svg">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2">

    <style>
        body {
            padding-top: 30px;
        }
    </style>
</head>
<body>
<div class="ui container">
    <header class="">

        <div class="ui inverted segment menu">

            <a href="{{ url('/') }}" class="ui inverted button ">
                Inicio
            </a>
            <a href="{{ url('/ficha/criar') }}" class="ui  inverted blue button ">
                Adicionar ficha
            </a>
            <a href="{{ url('/') }}" class="ui  inverted blue button ">
                Relatórios
            </a>

        </div>
        <hr>
    </header>
    @yield('content')
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/semantic.min.js') }}"></script>
<script>
    $(document).ready(function () {

        $('.menu .item').tab();
        $("a#editar").click(function(){
            $('.fullscreen.modal').modal('show');
        });
    });
</script>
</body>
</html>
