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



                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    {{--<td>{{$supervisor->id}}</td>--}}
                                    {{--<td>{{$supervisor->username}}</td>--}}
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
