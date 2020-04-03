@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Datos Economicos'),
        'description' => __('
En esta seccion se pueden crear nuevos Usuarios para cada una de las Asociaciones, asi mismo se puede administrar cada perfil de cada Usuario'),
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--9">
  <div class="header-body">
    <!-- Card stats -->
    <div class="row">
      <div class="col">
        <div class="card shadow" style="background-color: #003508;">

          <div class="card-body">
              <h1 class="heading-large text-muted mb-4">Datos Economicos </h1>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">¿ La organización apoya a sus  socios en insumos, materia prima, equipos u otros ?</label>
                      <div class="input-group input-group-alternative mb-4">
                        <!-- <input class="form-control" placeholder="Nombre" type="text"> -->
                        {{-- <select name="apoya_ins" class="form-control">
                          <option value="no">NO</option>
                          <option value="si">SI</option>
                       </select> --}}
                       <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $economico->apoya_ins }}</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">¿ Están satisfechos/as con los beneficios que les brinda la organización ?</label>
                      <div class="input-group input-group-alternative mb-4">
                        <!-- <input class="form-control" placeholder="Telefono o Celular" type="text"> -->
                        {{-- <select name="satis_org" class="form-control">
                          <option value="no">NO</option>
                          <option value="si">SI</option>
                       </select> --}}
                       <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $economico->satis_org }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <hr class="my-4" /> -->
              <!-- Address -->
              <!-- <h6 class="heading-small text-muted mb-4">Personas que trabajan en su organizacion</h6> -->

              <hr class="my-4" />
              <!-- Description -->
              <a href="{{URL('/economico/'.$economico->id.'/edit')}}" class="btn btn-primary">Editar Informacion</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="header-body">
    <div class="row">
      <div class="col">
        <div lass="mt-5" id="app">
          <div class="card shadow" style="background-color: #003508;">
            <div class="card-body">
              <h1 class="heading-large text-muted mb-4">En que forma apoya la organizacion a sus socios:</h1>
                <detaeco></detaeco>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
