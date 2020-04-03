@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Beneficios que brinda la Organizacion'),
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
              <h1 class="heading-large text-muted mb-4">Alguno de sus socios/as cumplen funciones o son lideres </h1>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-2">
                        <div class="form-group">
                          <label class="form-control-label text-muted">Numero de Mujeres</label>
                          {{-- <input type="number" class="form-control my-3" name="cant_muj"> --}}
                          <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $beneficio->cant_muj }}</p>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="form-group">
                          <label class="form-control-label text-muted">Numero de Hombres</label>
                          {{-- <input type="number" class="form-control my-3" name="cant_var"> --}}
                          <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $beneficio->cant_var }}</p>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label text-muted">Especialidad de su Organizacion</label>
                          {{-- <input type="text" class="form-control my-3" name="espe"> --}}
                          <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $beneficio->espe }}</p>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label text-muted">Se Especializan en Produccion Ecologica</label>
                          {{-- <input type="number" class="form-control my-3" name="pro_eco"> --}}
                          <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $beneficio->pro_eco }}</p>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label text-muted">Alguno de sus socios/as cumplen funciones o son lideres</label>
                          {{-- <input type="number" class="form-control my-3" name="pro_eco"> --}}
                          @if ($bene_lider->gob_mun == 'si')
                            <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">El gobierno minicipal</p>
                          @endif
                          @if ($bene_lider->org_sim == 'si')
                            <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">Organizaciones similares</p>
                          @endif
                          @if ($bene_lider->ong == 'si')
                            <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">ONG o fundaciones</p>
                          @endif
                          @if ($bene_lider->gob_dep == 'si')
                            <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">Gobierno departamental/nacional</p>
                          @endif
                          @if ($bene_lider->lid_org == 'si')
                            <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">Lideres de organizaciones</p>
                          @endif
                          @if ($bene_lider->otro == 'si')
                            <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">Otro</p>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <hr class="my-4" />
              <a href="{{URL('/beneficio/'.$beneficio->id_user.'/edit')}}" class="btn btn-primary">Editar Informacion</a>
              <!-- Description -->
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
              <h1 class="heading-large text-muted mb-4">¿ Se realiza eventos de capacitación, asistencia técnica o similar  para apoyo a los socios ?</h1>
                <beneso></beneso>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
