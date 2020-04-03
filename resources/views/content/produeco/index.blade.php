@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Produccion Ecologica'),
        'description' => __('
En esta seccion se pueden crear nuevos Usuarios para cada una de las Asociaciones, asi mismo se puede administrar cada perfil de cada Usuario'),
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--9">
  <div class="header-body">

    <div class="row">
      <div class="col">
        <div class="card shadow" style="background-color: #003508;">

          <div class="card-body">
              <h1 class="heading-large text-muted mb-4">Produccion Ecologica </h1>
              <div class="pl-lg-4">
                <hr class="my-4" />
                <h3 class="heading-large text-muted mb-4">Porcentaje / Area Promedio de su Tierra Produce el Socio / a en Forma Ecologica</h3>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <h2 class="card shadow text-white bg-dark pl-3 pr-3">{{ $produ_eco->pro_soc }} %</h2>
                    </div>

                  </div>
                </div>

                <hr class="my-3" />
              <h6 class="heading-small text-muted mb-4">¿Que porcentaje de socios tiene algun tipo de certidicacion ecologica?</h6>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <h2 class="card shadow text-white bg-dark pl-3 pr-3">{{ $produ_eco->cer_soc }} %</h2>
                    </div>
                  </div>
                </div>

                <hr class="my-3" />
                <h6 class="heading-small text-muted mb-4">¿Que area o superficie promedio por socio/a esta certificada? Detallar</h6>
                <div class="row">
                  <div class="col-lg-8">
                    <div class="form-group">
                      {{-- <input name="orig_prod" type="number" placeholder="porcentaje"> --}}
                      <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $produ_eco->sup_soc }}</p>
                    </div>
                  </div>
                </div>

                <hr class="my-3" />
                <h6 class="heading-small text-muted mb-4">¿Que area o superficie promedio por socio/a esta certificada? Adjuntar</h6>
                <div class="row">
                  <div class="col-lg-8">
                    <div class="form-group">
                      {{-- <input name="orig_prod" type="number" placeholder="porcentaje"> --}}
                      <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $produ_eco->adju }}</p>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                {{-- <a href="" class="btn btn-primary">Editar Informacion</a> --}}
                <a href="{{URL('/proeco/'.$produ_eco->id.'/edit')}}" class="btn btn-primary">Editar Informacion</a>
              </div>
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
              <h1 class="heading-large text-muted mb-4">Introduzca los tipos de certificados</h1>
                <certificado/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
