@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Editar Datos Administrativos'),
        'description' => __('
En esta seccion se pueden crear nuevos Usuarios para cada una de las Asociaciones, asi mismo se puede administrar cada perfil de cada Usuario'),
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--9">
  <div class="header-body">
    <div class="row">
      <div class="col">
        <div class="card shadow">
          <div class="card-body">
            <form method="POST" action="{{ url('/daadmin/'.$administrativo->id_user) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              <h1 class="heading-large text-muted mb-4">Datos Administrativos </h1>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Sistema contable</label>
                      <div class="mb-4">
                        <select name="sis_cont" class="form-control">
                          @if($administrativo->sis_cont == 'SI')
                            <option value="NO">NO</option>
                            <option value="SI" selected="selected">SI</option>
                          @else
                            <option value="NO" selected="selected">NO</option>
                            <option value="SI">SI</option>
                          @endif
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Manual de funciones</label>
                      <div class="mb-4">
                        <select name="man_func" class="form-control">
                          @if($administrativo->man_func == 'SI')
                            <option value="NO">NO</option>
                            <option value="SI" selected="selected">SI</option>
                          @else
                            <option value="NO" selected="selected">NO</option>
                            <option value="SI">SI</option>
                          @endif
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Calculo de costos</label>
                      <div class="mb-4">
                        <select name="cal_cost" class="form-control">
                          @if($administrativo->cal_cost == 'SI')
                            <option value="NO">NO</option>
                            <option value="SI" selected="selected">SI</option>
                          @else
                            <option value="NO" selected="selected">NO</option>
                            <option value="SI">SI</option>
                          @endif
                       </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Inventario</label>
                      <div class="mb-4">
                        <select name="inven" class="form-control">
                          @if($administrativo->inven == 'SI')
                            <option value="NO">NO</option>
                            <option value="SI" selected="selected">SI</option>
                          @else
                            <option value="NO" selected="selected">NO</option>
                            <option value="SI">SI</option>
                          @endif
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Manual de procesos</label>
                      <div class="mb-4">
                        <select name="man_proc" class="form-control">
                          @if($administrativo->man_proc == 'SI')
                            <option value="NO">NO</option>
                            <option value="SI" selected="selected">SI</option>
                          @else
                            <option value="NO" selected="selected">NO</option>
                            <option value="SI">SI</option>
                          @endif
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Planes o ideas de negocios</label>
                      <div class="mb-4">
                        <select name="pla_nego" class="form-control">
                          @if($administrativo->pla_nego == 'SI')
                            <option value="NO">NO</option>
                            <option value="SI" selected="selected">SI</option>
                          @else
                            <option value="NO" selected="selected">NO</option>
                            <option value="SI">SI</option>
                          @endif
                       </select>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">POA (adjuntar)</label>
                      <div class="input-group input-group-alternative mb-4">
                         <input type="file" name="poa" class="form-control" value="{{ $administrativo->poa }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">PEI (adjuntar)</label>
                      <div class="input-group input-group-alternative mb-4">
                       <input type="file" name="pei" class="form-control" value="{{ $administrativo->pei }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Impuestos al dia</label>
                      <div class="mb-4">
                        <select name="imp_dia" class="form-control">
                          @if($administrativo->imp_dia == 'SI')
                            <option value="NO">NO</option>
                            <option value="SI" selected="selected">SI</option>
                          @else
                            <option value="NO" selected="selected">NO</option>
                            <option value="SI">SI</option>
                          @endif
                       </select>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <hr class="my-4" />
              <div class="row">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ url('daadmin') }}" class="btn btn-info">Cancelar</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
