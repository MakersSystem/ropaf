@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('CULTIVOS ANUALES CICLOS CORTOS')
    ])
<div class="container-fluid mt--8">
  <div lass="mt-5" id="app">
    <div class="header-body">
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-body">
              <h1 class="heading-large text-muted mb-4">Superficie Sembrada, Semilla Utilizada, Meses de Siembra, mes de Cosecha y Transformacion de su Producto</h1>
                <producto></producto>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-body">
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-body">
              <h1 class="heading-large text-muted mb-4">Introduzca los problemas productivos</h1>
                <propro></propro>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
