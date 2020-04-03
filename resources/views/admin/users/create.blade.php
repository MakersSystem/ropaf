@extends('layouts.app', ['title' => __('User Management')])
@section('content')

@include('user.partials.header', [
        'title' => __('Crear Organizaciones'),
        'description' => __('
        En esta seccion se pueden crear nuevas Organizaciones, asi mismo se puede administrar cada perfil de cada Organizacion'),
        'class' => 'col-lg-7'
    ])
<div class="container-fluid mt--9">
  <div class="card" style="box-shadow: 1px 2px 6px rgba(0, 0, 0, .5);">
      <div class="card-header">
          <b>Crear un Organizacion</b> 
      </div>

      <div class="card-body">
          <form action="{{ route("admin.users.store") }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                  <label for="name">Nombre de la Organizacion *</label>
                  <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                  @if($errors->has('name'))
                      <em class="invalid-feedback">
                          {{ $errors->first('name') }}
                      </em>
                  @endif
                  <p class="helper-block">
                      {{ trans('cruds.user.fields.name_helper') }}
                  </p>
              </div>
              <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                  <label for="email">Correo Electronico*</label>
                  <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                  @if($errors->has('email'))
                      <em class="invalid-feedback">
                          {{ $errors->first('email') }}
                      </em>
                  @endif
                  <p class="helper-block">
                      {{ trans('cruds.user.fields.email_helper') }}
                  </p>
              </div>
              <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                  <label for="password">Contraseña *</label>
                  <input type="password" id="password" name="password" class="form-control" required>
                  @if($errors->has('password'))
                      <em class="invalid-feedback">
                          {{ $errors->first('password') }}
                      </em>
                  @endif
                  <p class="helper-block">
                      {{ trans('cruds.user.fields.password_helper') }}
                  </p>
              </div>
              <div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                  <label for="roles">{{ trans('cruds.user.fields.roles') }} *
                  <select name="roles[]" id="roles" class="form-control select2" required>
                      @foreach($roles as $id => $roles)
                          <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                      @endforeach
                  </select>
                  @if($errors->has('roles'))
                      <em class="invalid-feedback">
                          {{ $errors->first('roles') }}
                      </em>
                  @endif
                  <p class="helper-block">
                      {{ trans('cruds.user.fields.roles_helper') }}
                  </p>
              </div>
              <div>
                  <input class="btn btn-success" type="submit" value="Guardar">
              </div>
          </form>


      </div>
  </div>
  @include('layouts.footers.auth')
</div>

@endsection
