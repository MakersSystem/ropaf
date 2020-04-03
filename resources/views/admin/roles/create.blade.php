@extends('layouts.app')
@section('content')
@include('user.partials.header', [
        'title' => __('Roles'),
        'description' => __('
En esta seccion se pueden crear nuevos Roles para los Usuarios'),
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--9">
  <div class="card" style="box-shadow: 1px 2px 6px rgba(0, 0, 0, .5);">
      <div class="card-header">
          Crear Rol
      </div>

      <div class="card-body">
          <form action="{{ route("admin.roles.store") }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                  <label for="name">Titulo *</label>
                  <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($role) ? $role->name : '') }}" required>
                  @if($errors->has('name'))
                      <em class="invalid-feedback">
                          {{ $errors->first('name') }}
                      </em>
                  @endif
                  <p class="helper-block">
                      {{ trans('cruds.role.fields.title_helper') }}
                  </p>
              </div>
              <div class="form-group {{ $errors->has('permissions') ? 'has-error' : '' }}">
                  <label for="permission">Permisos *
                      
                  <select name="permission[]" id="permission" class="form-control select2" required>
                      @foreach($permissions as $id => $permissions)
                          <option value="{{ $id }}" {{ (in_array($id, old('permission', [])) || isset($role) && $role->permissions->contains($id)) ? 'selected' : '' }}>{{ $permissions }}</option>
                      @endforeach
                  </select>
                  @if($errors->has('permission'))
                      <em class="invalid-feedback">
                          {{ $errors->first('permission') }}
                      </em>
                  @endif
                  <p class="helper-block">
                      {{ trans('cruds.role.fields.permissions_helper') }}
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
