@extends('layouts.dashboard')

@section('header')
    <center>
        <h3><strong><font color="red"><h1>{{$user->username}}</h1></font></strong></h3>
    </center>
@endsection

@section('body')
    <center>
        <strong>{{$user->name}} {{$user->surname}}</strong><br>
        <strong>Email :</strong> <a href="mailto:{{$user->email}}" target="_top">{{$user->email}}</a><br>
        <strong>Dział :</strong> {{$user->department}}
    </center>
    <br>

    <table class="table table-bordered">
        <tr>
            @if($user->i>0)
                <td class="table-success text-center"><strong><h5>{{$user->i}}</h5></strong></td>
            @else
                <td class="table-danger text-center"><strong><h5>{{$user->i}}</h5></strong></td>
            @endif

            @if($user->q>0)
                <td class="table-success text-center"><strong><h5>{{$user->q}}</h5></strong></td>
            @else
                <td class="table-danger text-center"><strong><h5>{{$user->q}}</h5></strong></td>
            @endif

            @if($user->o>0)
                <td class="table-success text-center"><strong><h5>{{$user->o}}</h5></strong></td>
            @else
                <td class="table-danger text-center"><strong><h5>{{$user->o}}</h5></strong></td>
            @endif

            @if($user->r>0)
                <td class="table-success text-center"><strong><h5>{{$user->r}}</h5></strong></td>
            @else
                <td class="table-danger text-center"><strong><h5>{{$user->r}}</h5></strong></td>
            @endif

            @if($user->i2>0)
                <td class="table-success text-center"><strong><h5>{{$user->i2}}</h5></strong></td>
            @else
                <td class="table-danger text-center"><strong><h5>{{$user->i2}}</h5></strong></td>
            @endif

            @if($user->a>0)
                <td class="table-success text-center"><strong><h5>{{$user->a}}</h5></strong></td>
            @else
                <td class="table-danger text-center"><strong><h5>{{$user->a}}</h5></strong></td>
            @endif

            @if($user->n>0)
                <td class="table-success text-center"><strong><h5>{{$user->n}}</h5></strong></td>
            @else
                <td class="table-danger text-center"><strong><h5>{{$user->n}}</h5></strong></td>
            @endif


        </tr>

        <tr>
            @if($user->i > 0)
                <td class="text-center"><h5><font color="green">I</font></td>
            @else
                <td class="text-center"><h5><font color="red">I</font></td>
            @endif

            @if($user->q > 0)
                <td class="text-center"><h5><font color="green">Q</font></td>
            @else
                <td class="text-center"><h5><font color="red">Q</font></td>
            @endif

            @if($user->o > 0)
                <td class="text-center"><h5><font color="green">O</font></td>
            @else
                <td class="text-center"><h5><font color="red">O</font></td>
            @endif

            @if($user->i > 0)
                <td class="text-center"><h5><font color="green">R</font></td>
            @else
                <td class="text-center"><h5><font color="red">R</font></td>
            @endif

            @if($user->i2 > 0)
                <td class="text-center"><h5><font color="green">I</font></td>
            @else
                <td class="text-center"><h5><font color="red">I</font></td>
            @endif

            @if($user->a > 0)
                <td class="text-center"><h5><font color="green">A</font></td>
            @else
                <td class="text-center"><h5><font color="red">A</font></td>
            @endif

            @if($user->n > 0)
                <td class="text-center"><h5><font color="green">N</font></td>
            @else
                <td class="text-center"><h5><font color="red">N</font></td>
            @endif
        </tr>
    </table>

    <center><strong>TOTAL</strong></center>
    <table class="table table-bordered">
        <tr>
            @if($user->itotal>0)
                <td class="table-success text-center"><strong><h5>{{$user->itotal}}</h5></strong></td>
            @else
                <td class="table-danger text-center"><strong><h5>{{$user->itotal}}</h5></strong></td>
            @endif

            @if($user->qtotal>0)
                <td class="table-success text-center"><strong><h5>{{$user->qtotal}}</h5></strong></td>
            @else
                <td class="table-danger text-center"><strong><h5>{{$user->qtotal}}</h5></strong></td>
            @endif

            @if($user->ototal>0)
                <td class="table-success text-center"><strong><h5>{{$user->ototal}}</h5></strong></td>
            @else
                <td class="table-danger text-center"><strong><h5>{{$user->ototal}}</h5></strong></td>
            @endif

            @if($user->rtotal>0)
                <td class="table-success text-center"><strong><h5>{{$user->rtotal}}</h5></strong></td>
            @else
                <td class="table-danger text-center"><strong><h5>{{$user->rtotal}}</h5></strong></td>
            @endif

            @if($user->i2total>0)
                <td class="table-success text-center"><strong><h5>{{$user->i2total}}</h5></strong></td>
            @else
                <td class="table-danger text-center"><strong><h5>{{$user->i2total}}</h5></strong></td>
            @endif

            @if($user->atotal>0)
                <td class="table-success text-center"><strong><h5>{{$user->atotal}}</h5></strong></td>
            @else
                <td class="table-danger text-center"><strong><h5>{{$user->atotal}}</h5></strong></td>
            @endif

            @if($user->ntotal>0)
                <td class="table-success text-center"><strong><h5>{{$user->ntotal}}</h5></strong></td>
            @else
                <td class="table-danger text-center"><strong><h5>{{$user->ntotal}}</h5></strong></td>
            @endif


        </tr>

        <tr>
            @if($user->i > 0)
                <td class="text-center"><h5><font color="green">I</font></td>
            @else
                <td class="text-center"><h5><font color="red">I</font></td>
            @endif

            @if($user->q > 0)
                <td class="text-center"><h5><font color="green">Q</font></td>
            @else
                <td class="text-center"><h5><font color="red">Q</font></td>
            @endif

            @if($user->o > 0)
                <td class="text-center"><h5><font color="green">O</font></td>
            @else
                <td class="text-center"><h5><font color="red">O</font></td>
            @endif

            @if($user->i > 0)
                <td class="text-center"><h5><font color="green">R</font></td>
            @else
                <td class="text-center"><h5><font color="red">R</font></td>
            @endif

            @if($user->i2 > 0)
                <td class="text-center"><h5><font color="green">I</font></td>
            @else
                <td class="text-center"><h5><font color="red">I</font></td>
            @endif

            @if($user->a > 0)
                <td class="text-center"><h5><font color="green">A</font></td>
            @else
                <td class="text-center"><h5><font color="red">A</font></td>
            @endif

            @if($user->n > 0)
                <td class="text-center"><h5><font color="green">N</font></td>
            @else
                <td class="text-center"><h5><font color="red">N</font></td>
            @endif
        </tr>
    </table>
    </tr>
    </table>
    @foreach($user->comments as $comment)

        <div class="row justify-content-center">
            <div class="card col-md-11 col-sm-11s"  style="background-color:#e3e3e3">
                <div class="card-body text-left ">
                    <h4 class="card-title">{{$comment->title}}</h4>
                    <p class="card-text">{{$comment->body}}</p>
                    <p class="card-link text-muted	">{{$comment->created_at}}</p>
                </div>
            </div>
        </div>
    @endforeach

@endsection


