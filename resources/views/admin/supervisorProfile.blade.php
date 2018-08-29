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
        <strong>Ilość przydzielonych liter: </strong><br>
        <strong>BIEŻĄCA TURA:</strong> {{$supervisor->count}}<br>
        <strong>TOTAL:</strong> {{$supervisor->counttotal}}<br><br>

    <table class="table table-hover">
        <tr>
            {{--<th>ID</th>--}}
            <th>LOGIN</th>
            <th>IMIĘ</th>
            <th>NAZWISKO</th>
            <th>DZIAŁ</th>


        </tr>
        @foreach($users as $user)
            <tr>
                {{--<td>{{$supervisor->id}}</td>--}}
                <td><a href="{{route('admin.userProfile',$user->id)}}">{{$user->username}}</a></td>
                <td>{{$user->name}}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->department}}</td>
                @if($user->i > 0)
                    <td><h4><font color="green">I</font></td>
                @else
                    <td><h4><font color="red">I</font></td>
                @endif
                @if($user->q > 0)
                    <td><h4><font color="green">Q</font></td>
                @else
                    <td><h4><font color="red">Q</font></td>
                @endif
                @if($user->o > 0)
                    <td><h4><font color="green">O</font></td>
                @else
                    <td><h4><font color="red">O</font></td>
                @endif
                @if($user->r > 0)
                    <td><h4><font color="green">R</font></td>
                @else
                    <td><h4><font color="red">R</font></td>
                @endif
                @if($user->i2 > 0)
                    <td><h4><font color="green">I</font></td>
                @else
                    <td><h4><font color="red">I</font></td>
                @endif
                @if($user->a > 0)
                    <td><h4><font color="green">A</font></td>
                @else
                    <td><h4><font color="red">A</font></td>
                @endif
                @if($user->n > 0)
                    <td><h4><font color="green">N</font></td>
                @else
                    <td><h4><font color="red">N</font></td>
                @endif
                <td><a class="btn btn-dark" href="{{route('admin.delete.user',$user->id)}}">Usuń</a></td>
            </tr>
        @endforeach

    </table>

@endsection


