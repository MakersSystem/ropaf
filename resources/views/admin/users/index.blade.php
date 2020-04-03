@extends('layouts.app', ['title' => __('User Management')])
@section('content')

@include('user.partials.header', [
        'title' => __('Crear Organizaciones'),
        'description' => __('
En esta seccion se pueden crear nuevas Organizaciones, asi mismo se puede administrar cada perfil de cada Organizacion'),
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--9">
  @can('users_manage')
      <div style="margin-bottom: 10px;" class="row">
          <div class="col-lg-12">
              <a class="btn btn-success" href="{{ route("admin.users.create") }}">
                  Agregar Organización
              </a>
          </div>
      </div>
  @endcan
  <div class="card" style="box-shadow: 1px 2px 6px rgba(0, 0, 0, .5);">
      <div class="card-header">
          Lista de Usuarios
      </div>

      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover datatable datatable-User">
                  <thead>
                      <tr>
                          <th>
                              id
                          </th>
                          <th>
                              Organizaciones
                          </th>
                          <th>
                              Correo Electronico
                          </th>
                          <th>
                              {{ trans('cruds.user.fields.roles') }}
                          </th>
                          <th>
                              &nbsp;
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($users as $key => $user)
                          <tr data-entry-id="{{ $user->id }}">
                              <td>
                                  {{ $user->id ?? '' }}
                              </td>
                              <td>
                                  {{ $user->name ?? '' }}
                              </td>
                              <td>
                                  <a href="{!! route('saveid', ['id'=>$user->id]) !!}">{{ $user->email ?? '' }}</a
                              </td>
                              <td>
                                  @foreach($user->roles()->pluck('name') as $role)
                                      <span class="badge badge-info">{{ $role }}</span>
                                  @endforeach
                              </td>
                              <td>
                                  <a class="btn btn-xs btn-primary" href="{{ route('admin.users.show', $user->id) }}">
                                      Ver
                                  </a>

                                  <a class="btn btn-xs btn-info" href="{{ route('admin.users.edit', $user->id) }}">
                                      Editar
                                  </a>

                                  <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('Eliminar') }}');" style="display: inline-block;">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('Eliminar') }}">
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
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('users_manage')
  let deleteButtonTrans = 'Eliminar Seleccionados'
  let deleteButton = {

    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>

@endsection

