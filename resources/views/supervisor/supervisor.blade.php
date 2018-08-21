@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <table class="table table-hover">


                                <tr>

                                    <th>ID</th>
                                    {{--<th>LOGIN</th>--}}
                                    <th>IMIĘ</th>
                                    <th>NAZWISKO</th>
                                    <th>DZIAŁ</th>
                                    {{--<th>I</th>--}}
                                    {{--<th>Q</th>--}}
                                    {{--<th>O</th>--}}
                                    {{--<th>R</th>--}}
                                    {{--<th>I</th>--}}
                                    {{--<th>A</th>--}}
                                    {{--<th>N</th>--}}
                                </tr>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        {{--<td>{{$user->username}}</td>--}}
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->surname}}</td>
                                        <td>{{$user->department}}</td>
                                        <td>

                                            @if($user->i > 0)
                                                <a class="btn btn-success" href="">I</a>
                                            @else
                                                <a class="btn btn-danger" href="">I</a>
                                            @endif</td>
                                        <td>
                                            @if($user->q > 0)
                                                <button type="button" class="btn btn-success" href="/increment">Q</button>
                                            @else
                                                <button type="button" class="btn btn-danger" href="/increment">Q</button>
                                            @endif</td>
                                        <td>
                                            @if($user->o > 0)
                                                <button type="button" class="btn btn-success">O</button>
                                            @else
                                                <button type="button" class="btn btn-danger">O</button>
                                            @endif</td>
                                        <td>   @if($user->r > 0)
                                                <button type="button" class="btn btn-success">R</button>
                                            @else
                                                <button type="button" class="btn btn-danger">R</button>
                                            @endif</td>
                                        <td>   @if($user->i2 > 0)
                                                <button type="button" class="btn btn-success">I</button>
                                            @else
                                                <button type="button" class="btn btn-danger">I</button>
                                            @endif</td>
                                        <td>   @if($user->a > 0)
                                                <button type="button" class="btn btn-success">A</button>
                                            @else
                                                <button type="button" class="btn btn-danger">A</button>
                                            @endif</td>
                                        <td>   @if($user->n > 0)
                                                <button type="button" class="btn btn-success">N</button>
                                            @else
                                                <button type="button" class="btn btn-danger">N</button>
                                            @endif</td>
                                    </tr>
                                @endforeach
                            </table>


                            You are logged in as SUPERVISOR !
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
