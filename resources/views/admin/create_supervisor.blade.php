@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>Dodaj przełożonego</strong></div>

                    <div class="card-body">

                        {!! Form::open(['route' => 'admin.store.supervisor']) !!}


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



                        {!! Form::submit('Zapisz',['class'=>'btn btn-primary']) !!}
                        {!! link_to(route('admin.dashboard'),'<<< Powrót', [ 'class' => 'btn btn-default']) !!}





                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection