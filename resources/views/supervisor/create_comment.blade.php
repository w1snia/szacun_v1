@extends('layouts.dashboard')

@section('header')
    Dodaj komentarz użytkownikowi <strong>{{$user->username}}</strong>

@endsection


@section('body')

    {!! Form::open(['route' => ['supervisor.store.comment', $user->id,$letter], 'method' =>'POST']) !!}

    <div class="row">
        <div class="col-md-5">

            {!! Form::label('title',"Tytuł :") !!}
            {!! Form::text('title',$letter) !!}
            {{--{!! Form::select('title',['Integrity'=> 'Integrity','Customer Dedication' => 'Customer Dedication',--}}
            {{--'Open Communication'=> 'Open Communication','Respect'=>'Respect','Innovation'=>'Innovation','Accountability'=>'Accountability','Need to give back'=>'Need to give back'],['class'=>'form-control']) !!}--}}
        </div>
        <br>
        <div class="col-md-8">
            {!! Form::label('body',"Treść :") !!}
            {!! Form::textarea('body',null,['class'=>'form-control']) !!}
        </div>
        <br><br>
        <center>
            {!! Form::submit('Dodaj komentarz',['class'=>'btn btn-primary']) !!}
            {!! link_to(route('supervisor.dashboard'),'<<< Powrót', [ 'class' => 'btn btn-default']) !!}
        </center>
    </div>

    {!! Form::close() !!}

@endsection
