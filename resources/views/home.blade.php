@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>
                        Witaj {{Auth::user()->name}}!
                        <br>
                        Oto Twoje punkty SZACUNU :

                    <table class="table table-bordered">
                        <tr>
                                @if($user->i>0)
                                <td class="table-success"><strong><h3>{{$user->i}}</h3></strong></td>
                                @else
                                <td class="table-danger"><strong><h3>{{$user->i}}</h3></strong></td>
                                @endif
                                    @if($user->q>0)
                                        <td class="table-success"><strong><h3>{{$user->q}}</h3></strong></td>
                                    @else
                                        <td class="table-danger"><strong><h3>{{$user->q}}</h3></strong></td>
                                    @endif
                                <td><strong><h3>{{$user->o}}</h3></strong></td>
                                <td><strong><h3>{{$user->r}}</h3></strong></td>
                                <td><strong><h3>{{$user->i2}}</h3></strong></td>
                                <td><strong><h3>{{$user->a}}</h3></strong></td>
                                <td><strong><h3>{{$user->n}}</h3></strong></td>


                        </tr>

                        <tr>
                            @if($user->i > 0)
                                <td><1><font color="green">I</font></td>
                            @else
                                <td><h1><font color="red">I</font></td>
                            @endif

                                @if($user->q > 0)
                                    <td><h1><font color="green">Q</font></td>
                                @else
                                    <td><h1><font color="red">Q</font></td>
                                @endif

                                @if($user->o > 0)
                                    <td><h1><font color="green">O</font></td>
                                @else
                                    <td><h1><font color="red">O</font></td>
                                @endif

                                @if($user->i > 0)
                                    <td><h1><font color="green">R</font></td>
                                @else
                                    <td><h1><font color="red">R</font></td>
                                @endif

                                @if($user->i2 > 0)
                                    <td><h1><font color="green">I</font></td>
                                @else
                                    <td><h1><font color="red">I</font></td>
                                @endif

                                @if($user->a > 0)
                                    <td><h1><font color="green">A</font></td>
                                @else
                                    <td><h1><font color="red">A</font></td>
                                @endif

                                @if($user->n > 0)
                                    <td><h1><font color="green">N</font></td>
                                @else
                                    <td><h1><font color="red">N</font></td>
                                @endif
                        </tr>
                    </table>
                       
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged as USER!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
