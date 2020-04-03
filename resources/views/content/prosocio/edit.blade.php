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
            <form method="POST" action="{{ url('/daproduso/'.$pro_socio->id) }}">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              <h1 class="heading-large text-muted">Produccion Ecologica </h1>
              <div class="pl-lg-4">

                <h6 class="heading-small text-muted">¿Cual es el tamaño promedio de tierra por socio/a en metros cuadrados?</h6>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <input class="form-control form-control-alternative" name="pro_sup" type="number" placeholder="" value="{{ $pro_socio->pro_sup }}">
                    </div>
                  </div>
                </div>
                <h6 class="heading-small text-muted">¿Cual es el tamaño promedio del area de cultivo por socio/a en metros cuadrados?</h6>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <input class="form-control form-control-alternative" name="pro_cul" type="number" placeholder="" value="{{ $pro_socio->pro_cul }}">
                    </div>
                  </div>
                </div>

                <h6 class="heading-small text-muted">¿Que area promedio en metros cuadrados por socio/a tiene riego?</h6>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <input class="form-control form-control-alternative" name="pro_rie" type="number" placeholder="" value="{{ $pro_socio->pro_rie }}">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
