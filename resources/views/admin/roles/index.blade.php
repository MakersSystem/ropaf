@extends('layouts.us')
@section('content')
@include('user.partials.header', [
        'title' => __('Roles'),
        'description' => __('
En esta seccion se pueden crear nuevos Roles para los Usuarios'),
        'class' => 'col-lg-7'
    ])
<div class="container-fluid mt--9">
  <div style="margin-bottom: 10px;" class="row">
      <div class="col-lg-12">
          <a class="btn btn-success" href="{{ route("admin.roles.create") }}">
              Agregar Rol
          </a>
      </div>
  </div>
  <div class="card" style="box-shadow: 1px 2px 6px rgba(0, 0, 0, .5);">
      <div class="card-header">
          Lista de Roles
      </div>

      <div class="card-body">
          <div class="table-responsive">
              <table class=" table table-bordered table-striped table-hover datatable datatable-Role">
                  <thead>
                      <tr>
                          <th>
                              ID
                          </th>
                          <th>
                              Titulo
                          </th>
                          <th>
                              Permisos
                          </th>
                          <th>
                              &nbsp;
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($roles as $key => $role)
                          <tr data-entry-id="{{ $role->id }}">                            
                              <td>
                                  {{ $role->id ?? '' }}
                              </td>
                              <td>
                                  {{ $role->name ?? '' }}
                              </td>
                              <td>
                                  @foreach($role->permissions()->pluck('name') as $permission)
                                      <span class="badge badge-info">{{ $permission }}</span>
                                  @endforeach
                              </td>
                              <td>
                                  <a class="btn btn-xs btn-primary" href="{{ route('admin.roles.show', $role->id) }}">
                                      Ver
                                  </a>

                                  <a class="btn btn-xs btn-info" href="{{ route('admin.roles.edit', $role->id) }}">
                                      Editar
                                  </a>

                                  <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('¿Esta seguro de Eliminar?');" style="display: inline-block;">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <input type="submit" class="btn btn-xs btn-danger" value="Eliminar">
                                  </form>
                              </td>

                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>


      </div>
  </div>
  @include('layouts.footers.auth')
</div>


@endsection
@section('scripts')
@parent

@endsection
