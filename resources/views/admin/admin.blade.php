@extends('layouts.dashboard')

@section('header')

    <center>
        <a class="btn btn-info" href="{{route('admin.dashboard')}}">Lista przełożonych</a>
        <a class="btn btn-info" href="{{route('admin.show.user')}}">Lista pracowników</a>
        <a class="btn btn-success" href="{{route('admin.create.user')}}">Dodaj pracownika</a>
        <a class="btn btn-success" href="{{route('admin.create.supervisor')}}">Dodaj przełożonego</a>
    </center>
@endsection

@section('body')

    <table class="table table-hover">
        <tr>
            {{--<th>ID</th>--}}
            <th>LOGIN</th>
            <th>IMIĘ</th>
            <th>NAZWISKO</th>
            <th>DZIAŁ</th>
            <th>COUNTER</th>

        </tr>
        @foreach($supervisors as $supervisor)
            <tr>
                {{--<td>{{$supervisor->id}}</td>--}}
                <td><a href="{{route('admin.supervisorProfile',$supervisor->id)}}">{{$supervisor->username}}</a></td>
                <td>{{$supervisor->name}}</td>
                <td>{{$supervisor->surname}}</td>
                <td>{{$supervisor->department}}</td>
                <td>{{$supervisor->count}}</td>
                <td><a class="btn btn-dark" href="{{route('admin.delete.supervisor',$supervisor->id)}}">Usuń</a></td>

            </tr>
        @endforeach

    </table>



@endsection
