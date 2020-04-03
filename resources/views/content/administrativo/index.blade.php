@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Datos Administrativos'),
        'description' => __('
En esta seccion se pueden crear nuevos Usuarios para cada una de las Asociaciones, asi mismo se puede administrar cada perfil de cada Usuario'),
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--9">
  <div class="header-body">
    <!-- Card stats -->
    <div class="row">
      <div class="col">
        <div class="card shadow">
          <div class="card-body">
              <h1 class="heading-large text-muted mb-4">Datos Administrativos </h1>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Sistema contable</label>
                      <div class="mb-4">                        
                       <p class="card shadow form-control-label text-primary pl-3 pr-3">{{ $administrativo->sis_cont }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Manual de funciones</label>
                      <div class="mb-4">
                       <p class="card shadow form-control-label text-primary pl-3 pr-3">{{ $administrativo->man_func }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Calculo de costos</label>
                      <div class="mb-4">
                       <p class="card shadow form-control-label text-primary pl-3 pr-3">{{ $administrativo->cal_cost }}</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Inventario</label>
                      <div class="mb-4">
                       <p class="card shadow form-control-label text-primary pl-3 pr-3">{{ $administrativo->inven }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Manual de procesos</label>
                      <div class="mb-4">
                       <p class="card shadow form-control-label text-primary pl-3 pr-3">{{ $administrativo->man_proc }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Planes o ideas de negocios</label>
                      <div class="mb-4">
                       <p class="card shadow form-control-label text-primary pl-3 pr-3">{{ $administrativo->pla_nego }}</p>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">POA (adjuntar)</label>
                      <div class="mb-4">
                         <p class="card shadow form-control-label text-primary pl-3 pr-3">{{ $administrativo->poa }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">PEI (adjuntar)</label>
                      <div class="mb-4">
                       <p class="card shadow form-control-label text-primary pl-3 pr-3">{{ $administrativo->pei }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Impuestos al dia</label>
                      <div class="mb-4">
                       <p class="card shadow form-control-label text-primary pl-3 pr-3">{{ $administrativo->imp_dia }}</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <hr class="my-4" />
              <a href="{{URL('/daadmin/'.$administrativo->id.'/edit')}}" class="btn btn-primary">Editar Informacion</a>
          </div>
        </div>
        <div class="card shadow">
          <div class="card-body">
            <h1 class="heading-large text-muted mb-4 mt-4">Introduzca los principales problemas administrativos</h1>
            <hr class="my-4"/>
            <div class="mt--5" id="app">              
              <proadmi/>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection
