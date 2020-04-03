@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card shadow border-0" style="background-color: #003508;">
                    <div class="card-header bg-transparent">
                        <div class="text-muted text-center"><h1 class="text-muted">{{ __('Iniciar Sesion') }}</h1></div>
                    </div>
                    <div class="card-body px-lg-5 pt-lg-0 pl-lg-5 pr-lg-5 pb-lg-5">
                        <div class="text-center text-muted mb-1">
                            <small>
                                <h5 class="text-muted">{{ __('Asociacion de Organizaciones de Productores Ecologicos de Bolivia') }}</h5>
                            </small>
                            <br>

                        </div>
                        @if(\Session::has('message'))
                            <p class="alert alert-info">
                                {{ \Session::get('message') }}
                            </p>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <h1 class="text-muted">{{ env('APP_NAME', 'Permissions Manager') }}</h1>
                            <p class="text-muted">Iniciar Sesion</p>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                                <input name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus placeholder="Correo Electronico" value="{{ old('email', null) }}">
                                @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                                <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="Contraseña">
                                @if($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>

                            <div class="input-group mb-4">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                                    <label class="form-check-label text-muted" for="remember" style="vertical-align: middle;">
                                        Recordarme
                                    </label>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <button type="submit" class="btn px-4 text-white" style="background-color: #00b300;">
                                        Iniciar Sesion
                                    </button>
                                </div>
                                <!--
                                <div class="col-6 text-right">
                                    <a class="btn btn-link px-0 text-white" href="{{ route('password.request') }}">
                                        ¿Olvidaste tu Contraseña?
                                    </a>

                                </div>
                              -->
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
