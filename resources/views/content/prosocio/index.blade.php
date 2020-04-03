@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Datos productivos (Como Socios)'),
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
              <h1 class="heading-large text-muted">Produccion Ecologica </h1>
              <div class="pl-lg-4">

                <h2 class="heading-large text-muted">Tamaño promedio de tierra por socio/a en metros cuadrados</h2>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <h2 class="card shadow text-white bg-dark pl-3 pr-3"> {{ $pro_socio->pro_sup }}</h2>
                    </div>
                  </div>
                </div>

                <hr class="my-2" />
              <h2 class="heading-large text-muted">Tamaño promedio del area de cultivo por socio/a en metros cuadrados</h2>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <h2 class="card shadow text-white bg-dark pl-3 pr-3">{{ $pro_socio->pro_cul }}</h2>
                    </div>
                  </div>
                </div>

                <hr class="my-4" />
                <h2 class="heading-large text-muted mb-4">Area promedio por socio/a en metros cuadrados que tiene riego</h2>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <h2 class="card shadow text-white bg-dark pl-3 pr-3">{{ $pro_socio->pro_rie }} </h2>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                {{-- <a href="#" class="btn btn-primary">Editar Informacion</a> --}}
                <a href="{{URL('/daproduso/'.$pro_socio->id.'/edit')}}" class="btn btn-primary">Editar Informacion</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mt-2" id="app">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row">
            <div class="col">
              <div lass="mt-5" id="app">
                <div class="card shadow" style="background-color: #003508;">
                  <div class="card-body">
                    <h1 class="heading-large text-muted mb-4">Introduzca los Productos Agricolas</h1>
                      <proagri/>
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
                    <h1 class="heading-large text-muted mb-4">Introduzca los Productos Pecuarios</h1>
                      <propecu/>
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
                    <h1 class="heading-large text-muted mb-4">Introduzca Otros Productos</h1>
                      <prootro/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


</div>
@endsection
