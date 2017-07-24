<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.css') }}">
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
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.min.css') }}">
    <style>
        body {
            margin: 50px auto;
        }
    </style>
</head>
<body>
<div class="ui container">

    <table class="ui celled structured table">
        <thead>
        <tr>
            <th rowspan="2">Name</th>
            <th rowspan="2">Type</th>
            <th rowspan="2">Files</th>
            <th colspan="3">Languages</th>
        </tr>
        <tr>
            <th>Ruby</th>
            <th>JavaScript</th>
            <th>Python</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Alpha Team</td>
            <td>Project 1</td>
            <td>2</td>
            <td>
                <i class="large green checkmark icon"></i>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="3">Beta Team</td>
            <td>Project 1</td>
            <td>52</td>
            <td>
                <i class="large green checkmark icon"></i>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Project 2</td>
            <td>12</td>
            <td></td>
            <td>
                <i class="large green checkmark icon"></i>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>Project 3</td>
            <td>21</td>
            <td>
                <i class="large green checkmark icon"></i>
            </td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
