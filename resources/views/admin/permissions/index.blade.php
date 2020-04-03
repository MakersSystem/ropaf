@extends('layouts.app')
@section('content')

@include('user.partials.header', [
        'title' => __('Permisos'),
        'description' => __('
En esta seccion se pueden crear nuevos permisos para los Roles'),
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--9 shadow">
  <div style="margin-bottom: 10px;" class="row">
      <div class="col-lg-12">
          <a class="btn btn-success" href="{{ route("admin.permissions.create") }}">
              Agregar permiso
          </a>
      </div>
  </div>
  <div class="card" style="box-shadow: 1px 2px 6px rgba(0, 0, 0, .5);">
      <div class="card-header">
          Lista de Permisos
      </div>

      <div class="card-body">
          <div class="table-responsive">
              <table class=" table table-bordered table-striped table-hover datatable datatable-Permission">
                  <thead>
                      <tr>
                          
                          <th>
                              id
                          </th>
                          <th>
                              titulo
                          </th>
                          <th>
                              &nbsp;
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($permissions as $key => $permission)
                          <tr data-entry-id="{{ $permission->id }}">
                              
                              <td>
                                  {{ $permission->id ?? '' }}
                              </td>
                              <td>
                                  {{ $permission->name ?? '' }}
                              </td>
                              <td>
                                  <a class="btn btn-xs btn-primary" href="{{ route('admin.permissions.show', $permission->id) }}">
                                      Ver
                                  </a>

                                  <a class="btn btn-xs btn-info" href="{{ route('admin.permissions.edit', $permission->id) }}">
                                      Editar
                                  </a>

                                  <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" onsubmit="return confirm('¿Esta Seguro de Eliminar?');" style="display: inline-block;">
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
