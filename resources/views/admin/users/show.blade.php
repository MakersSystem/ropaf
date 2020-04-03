@extends('layouts.app')
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
          <b>Cuenta de Organizacion</b> 
      </div>

      <div class="card-body">
          <div class="mb-2">
              <table class="table table-bordered table-striped">
                  <tbody>
                      <tr>
                          <th>
                              {{ trans('cruds.user.fields.id') }}
                          </th>
                          <td>
                              {{ $user->id }}
                          </td>
                      </tr>
                      <tr>
                          <th>
                              Organizacion
                          </th>
                          <td>
                              {{ $user->name }}
                          </td>
                      </tr>
                      <tr>
                          <th>
                              Correo Electronico
                          </th>
                          <td>
                              {{ $user->email }}
                          </td>
                      </tr>
                      <tr>
                          <th>
                              Rol
                          </th>
                          <td>
                              @foreach($user->roles()->pluck('name') as $role)
                                  <span class="label label-info label-many">{{ $role }}</span>
                              @endforeach
                          </td>
                      </tr>
                  </tbody>
              </table>
              <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                  Regresar a Lista
              </a>
          </div>


      </div>
  </div>
  @include('layouts.footers.auth')
</div>
@endsection
