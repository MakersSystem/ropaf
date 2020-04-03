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
          Mostrar Permiso
      </div>

      <div class="card-body">
          <div class="mb-2">
              <table class="table table-bordered table-striped">
                  <tbody>
                      <tr>
                          <th>
                              id
                          </th>
                          <td>
                              {{ $permission->id }}
                          </td>
                      </tr>
                      <tr>
                          <th>
                              Titulo
                          </th>
                          <td>
                              {{ $permission->name }}
                          </td>
                      </tr>
                  </tbody>
              </table>
              <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                  Regresar a Lista
              </a>
          </div>

          <nav class="mb-3">
              <div class="nav nav-tabs">

              </div>
          </nav>
          <div class="tab-content">

          </div>
      </div>
  </div>  
  @include('layouts.footers.auth')
</div>

@endsection
