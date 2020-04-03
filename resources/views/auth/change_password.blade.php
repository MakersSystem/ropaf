@extends('layouts.app')
@section('content')
@include('user.partials.header', [
        'title' => __('Cambiar Contraseña'),
        'description' => __('
En esta Seccion puede cambiar su contraseña'),
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--9">
    <div class="card">
        <div class="card-header">
            Cambiar Contraseña
        </div>
    
        <div class="card-body">
            <form action="{{ route('auth.change_password') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group col-6 {{ $errors->has('current_password') ? 'has-error' : '' }}">
                    <label for="current_password">Contraseña Actual *</label>
                    <input type="password" id="current_password" name="current_password" class="form-control" required>
                    @if($errors->has('current_password'))
                        <em class="invalid-feedback">
                            {{ $errors->first('current_password') }}
                        </em>
                    @endif
                </div>
                <div class="form-group col-6 {{ $errors->has('new_password') ? 'has-error' : '' }}">
                    <label for="new_password">Nueva Contraseña *</label>
                    <input type="password" id="new_password" name="new_password" class="form-control" required>
                    @if($errors->has('new_password'))
                        <em class="invalid-feedback">
                            {{ $errors->first('new_password') }}
                        </em>
                    @endif
                </div>
                <div class="form-group col-6 {{ $errors->has('new_password_confirmation') ? 'has-error' : '' }}">
                    <label for="new_password_confirmation">Confirmar Nueva Contraseña *</label>
                    <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="form-control" required>
                    @if($errors->has('new_password_confirmation'))
                        <em class="invalid-feedback">
                            {{ $errors->first('new_password_confirmation') }}
                        </em>
                    @endif
                </div>
                <div class="col-6">
                    <input class="btn btn-success" type="submit" value="Guardar">
                </div>
            </form>
    
    
        </div>
        @include('layouts.footers.auth')
    </div>
</div>
@endsection
