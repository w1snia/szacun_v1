@extends('layouts.dashboard')

@section('header')
    <strong>{{ __('Logowanie do konta Administratora') }}</strong>
@endsection

@section('body')
    <form method="POST" action="{{ route('admin.login.submit') }}" aria-label="{{ __('Login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Nazwa użytkownika') }}</label>

            <div class="col-md-6">
                <input id="username" type="username"
                       class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username"
                       value="{{ old('username') }}" required autofocus>

                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Hasło') }}</label>

            <div class="col-md-6">
                <input id="password" type="password"
                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

            </div>
        </div>
    </form>

@endsection
