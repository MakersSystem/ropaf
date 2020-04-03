@extends('layouts.app')
@section('content')

@include('user.partials.header', [
        'title' => __('Permisos'),
        'description' => __('
En esta seccion se pueden crear nuevos permisos para los Roles'),
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--9">
  <div class="card" style="box-shadow: 1px 2px 6px rgba(0, 0, 0, .5);">
      <div class="card-header">
          Crear Permiso
      </div>

      <div class="card-body">
          <form action="{{ route("admin.permissions.store") }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                  <label for="name">Titulo *</label>
                  <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($permission) ? $permission->name : '') }}" required>
                  @if($errors->has('name'))
                      <em class="invalid-feedback">
                          {{ $errors->first('name') }}
                      </em>
                  @endif
                  <p class="helper-block">
                      {{ trans('cruds.permission.fields.title_helper') }}
                  </p>
              </div>
              <div>
                  <input class="btn btn-danger" type="submit" value="Guardar">
              </div>
          </form>


      </div>
  </div>
  @include('layouts.footers.auth')
</div>

@endsection
