@extends('layouts.app')

{{--<!doctype html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
    {{--<head>--}}
        {{--<meta charset="utf-8">--}}
        {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}


        {{--<title>{{config('app.name', 'Szacun')}}</title>--}}

        {{--<!-- Fonts -->--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

        {{--<!-- Styles -->--}}
        {{--<style>--}}
            {{--html, body {--}}
                {{--background-color: #fff;--}}
                {{--color: #636b6f;--}}
                {{--font-family: 'Raleway', sans-serif;--}}
                {{--font-weight: 100;--}}
                {{--height: 100vh;--}}
                {{--margin: 0;--}}
            {{--}--}}

            {{--.full-height {--}}
                {{--height: 100vh;--}}
            {{--}--}}

            {{--.flex-center {--}}
                {{--align-items: center;--}}
                {{--display: flex;--}}
                {{--justify-content: center;--}}
            {{--}--}}

            {{--.position-ref {--}}
                {{--position: relative;--}}
            {{--}--}}

            {{--.top-right {--}}
                {{--position: absolute;--}}
                {{--right: 10px;--}}
                {{--top: 18px;--}}
            {{--}--}}

            {{--.content {--}}
                {{--text-align: center;--}}
            {{--}--}}

            {{--.title {--}}
                {{--font-size: 84px;--}}
            {{--}--}}

            {{--.links > a {--}}
                {{--color: #636b6f;--}}
                {{--padding: 0 25px;--}}
                {{--font-size: 12px;--}}
                {{--font-weight: 600;--}}
                {{--letter-spacing: .1rem;--}}
                {{--text-decoration: none;--}}
                {{--text-transform: uppercase;--}}
            {{--}--}}

            {{--.m-b-md {--}}
                {{--margin-bottom: 30px;--}}
            {{--}--}}
        {{--</style>--}}
    {{--</head>--}}
    {{--<body>--}}
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Logowanie</a>--}}
                        {{--<a href="{{ route('register') }}">Register</a>--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--<div class="content">--}}
                {{--<div class="title m-b-md">--}}
                    {{--SZACUN--}}
                {{--</div>--}}

                {{--<div class="links">--}}
                    {{--<a href='/about'>O programie</a>--}}
                    {{--<a href=''>Nagrody</a>--}}
                    {{--<a href="https://laravel-news.com">News</a>--}}
                    {{--<a href="https://forge.laravel.com">Forge</a>--}}
                    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</body>--}}
{{--</html>--}}


@section('content')

    {{--<main role="main" class="container">--}}
        {{--<div class="jumbotron">--}}
            {{--<h1>Witaj w programie szacun</h1>--}}
            {{--<p class="lead"> Lorem ipsum bla bla bla</p>--}}
            {{--<a class="btn btn-lg btn-primary" href="/about" role="button">Dowiedz się więcej... &raquo;</a>--}}
        {{--</div>--}}
    {{--</main>--}}

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron my-2">
            <h1 class="display-4">Witaj w programie SZACUN!</h1>
            <p class="lead">
                Posiadanie zestawu jasnych zasad i wskazówek pozwala przełożonym wyróżniać pracowników, a klienci
                znają nasze wartości i jakość usług, które otrzymają. Nasze wartości iQorian definiują spójny zestaw
                oczekiwań dotyczących sposobu działania i interakcji.</p>
            <a href="http://www.iqor.com/culture" class="btn btn-primary btn-lg">Dowiedz się więcej!</a>
        </header>

        <!-- Page Features -->
        <div class="row text-center">


    </div>
    <!-- /.container -->

    <!-- Footer -->
    {{--<footer class="py-5 bg-dark">--}}
        {{--<div class="container">--}}
            {{--<p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>--}}
        {{--</div>--}}
        {{--<!-- /.container -->--}}
    {{--</footer>--}}

@endsection
