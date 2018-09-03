<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        * {
            font-family: DejaVu Sans !important;
        }
    </style>

    <!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}


{{--<!-- Fonts -->--}}
{{--<link rel="dns-prefetch" href="https://fonts.gstatic.com">--}}
{{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}
{{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"--}}
{{--integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">--}}


<!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<div id="app">


    <a href="{{route('admin.reports.downloadReport')}}"><i class="fas fa-save"></i>PDF</a>



    <center><h1><a href="{{route('admin.reports.downloadReportExcel')}}"><i class="fas fa-save"></i>Pracownicy</a></h1></center>
    <table class="table table-bordered table-sm">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Dział</th>
            <th scope="col">I</th>
            <th scope="col">Q</th>
            <th scope="col">O</th>
            <th scope="col">R</th>
            <th scope="col">I</th>
            <th scope="col">A</th>
            <th scope="col">N</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->department}}</td>
                <td>{{$user->i}}</td>
                <td>{{$user->q}}</td>
                <td>{{$user->o}}</td>
                <td>{{$user->r}}</td>
                <td>{{$user->i2}}</td>
                <td>{{$user->a}}</td>
                <td>{{$user->n}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>

    <center><h1><a href="{{route('admin.reports.downloadReportExcel2')}}"><i class="fas fa-save"></i>Przełożeni</a></h1></center>
    <table class="table table-bordered table-sm">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Dział</th>
            <th scope="col">Licznik</th>
        </tr>
        </thead>
        <tbody>
        @foreach($supervisors as $supervisor)
            <tr>
                <td>{{$supervisor->name}}</td>
                <td>{{$supervisor->surname}}</td>
                <td>{{$supervisor->department}}</td>
                <td>{{$supervisor->count}}</td>

            </tr>
        </tbody>
        @endforeach


</div>
</body>
</html>
