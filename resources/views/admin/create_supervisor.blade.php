@extends('layouts.dashboard')

@section('header')
    <strong>Dodaj przełożonego</strong>
@endsection

@section('body')


    {!! Form::open(['route' => 'admin.store.supervisor']) !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
        <br>
    @endif

    {!! Form::label('username','Login:') !!}
    {!! Form::text('username',null,['class'=>'form-control']) !!}



    {!! Form::label('password','Hasło:') !!}
    {!! Form::text('password',null,['class'=>'form-control']) !!}



    {!! Form::label('name','Imię:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}



    {!! Form::label('surname','Nazwisko:') !!}
    {!! Form::text('surname',null,['class'=>'form-control']) !!}



    {!! Form::label('department','Dział:') !!}
    {!! Form::text('department',null,['class'=>'form-control']) !!}




    {!! Form::label('email','E-mail:') !!}
    {!! Form::text('email',null,['class'=>'form-control']) !!}

    <br>

    {!! Form::submit('Zapisz',['class'=>'btn btn-primary']) !!}
    {!! link_to(route('admin.dashboard'),'<<< Powrót', [ 'class' => 'btn btn-default']) !!}





    {!! Form::close() !!}



@endsection