@extends('layouts.dashboard')

@section('header')

    <center>
        <h3><strong><font color="red"><h1>{{$supervisor->username}}</h1></font></strong></h3>
    </center>

@endsection

@section('body')

    <center>

        <strong>{{$supervisor->name}} {{$supervisor->surname}}</strong><br>
        <strong>Email :</strong> <a href="mailto:{{$supervisor->email}}" target="_top">{{$supervisor->email}}</a><br>
        <strong>Dział :</strong> {{$supervisor->department}}<br>
        <strong>Ilość przydzielonych liter :</strong> {{$supervisor->count}}
    </center>

@endsection


