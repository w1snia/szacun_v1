@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>Witaj, {{$name}} !</strong>

                    </div>

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
                                                <a class="btn btn-success" href="{{route('supervisor.incrementi',$user->id)}}">I</a>
                                            @else
                                                <a class="btn btn-danger" href="{{route('supervisor.incrementi',$user->id)}}">I</a>
                                            @endif
                                            </td>

                                            <td>
                                            @if($user->q > 0)
                                                <a class="btn btn-success" href="{{route('supervisor.incrementq',$user->id)}}">Q</a>
                                            @else
                                                <a class="btn btn-danger" href="{{route('supervisor.incrementq',$user->id)}}">Q</a>
                                            @endif
                                            </td>

                                            <td>
                                            @if($user->o > 0)
                                                <a class="btn btn-success" href="{{route('supervisor.incremento',$user->id)}}">O</a>
                                            @else
                                                <a class="btn btn-danger" href="{{route('supervisor.incremento',$user->id)}}">O</a>
                                            @endif
                                            </td>

                                            <td>
                                            @if($user->r > 0)
                                                <a class="btn btn-success" href="{{route('supervisor.incrementr',$user->id)}}">R</a>
                                            @else
                                                <a class="btn btn-danger" href="{{route('supervisor.incrementr',$user->id)}}">R</a>
                                            @endif
                                             </td>

                                             <td>
                                            @if($user->i2 > 0)
                                                <a class="btn btn-success" href="{{route('supervisor.incrementi2',$user->id)}}">I</a>
                                            @else
                                                <a class="btn btn-danger" href="{{route('supervisor.incrementi2',$user->id)}}">I</a>
                                            @endif
                                            </td>

                                            <td>
                                            @if($user->a > 0)
                                                <a class="btn btn-success" href="{{route('supervisor.incrementa',$user->id)}}">A</a>
                                            @else
                                                <a class="btn btn-danger" href="{{route('supervisor.incrementa',$user->id)}}">A</a>
                                            @endif
                                            </td>

                                            <td>
                                            @if($user->n > 0)
                                                <a class="btn btn-success" href="{{route('supervisor.incrementn',$user->id)}}">N</a>
                                            @else
                                                <a class="btn btn-danger" href="{{route('supervisor.incrementn',$user->id)}}">N</a>
                                            @endif
                                            </td>

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
