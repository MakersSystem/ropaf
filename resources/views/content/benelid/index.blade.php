@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Beneficios'),
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
              <h2 class="heading-large text-muted mb-4">Alguno de sus socios/as cumplen funciones o son lideres </h1>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      {{-- <label class="form-control-label text-muted" for="input-last-name">Empaque</label> --}}
                      <div class="input-group input-group-alternative mb-4">
                       <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $bene_lider->func_lid }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <hr class="my-4" />
              <a href="" class="btn btn-primary">Editar Informacion</a>
              <!-- Description -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="main-content">
  <div class="header bg-gradient-success pb-2 pt-5 pt-md-2">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row">
        <div class="col">
        <div class="card shadow bg-default">

          <div class="card-body">

          <hr class="my-4"/>
          <h6 class="heading-small text-muted mb-4">Se realiza eventos de capacitacion, asistencia tecnica o similar para apoyo a los socios</h6>
          <hr class="my-4"/>
          <div class="mt--5" id="app">
            <beneso/>
          </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>
  </div>
</div> -->
@endsection
