@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <a class="btn btn-info" href="{{route('admin.dashboard')}}">Lista przełożonych</a>
                            <a class="btn btn-info" href="{{route('admin.show.user')}}">Lista pracowników</a>
                            <a class="btn btn-success" href="{{route('admin.create.user')}}">Dodaj pracownika</a>
                            <a class="btn btn-success" href="{{route('admin.create.supervisor')}}">Dodaj przełożonego</a>
                        </center>
                </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-hover">
                            <tr>
                                {{--<th>ID</th>--}}
                                {{--<th>LOGIN</th>--}}
                                <th>IMIĘ</th>
                                <th>NAZWISKO</th>
                                <th>DZIAŁ</th>
                                <th>COUNTER</th>

                            </tr>
                            @foreach($supervisors as $supervisor)
                                <tr>
                                    {{--<td>{{$supervisor->id}}</td>--}}
                                    {{--<td>{{$supervisor->username}}</td>--}}
                                    <td>{{$supervisor->name}}</td>
                                    <td>{{$supervisor->surname}}</td>
                                    <td>{{$supervisor->department}}</td>
                                    <td>{{$supervisor->count}}</td>
                                    {{--<td><a class="btn btn-info" href="#">Edytuj</a></td>--}}
                                </tr>
                             @endforeach

                        </table>

                        You are logged in as ADMIN !
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
