@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Demandas'),
        'description' => __('
En esta seccion se pueden crear nuevos Usuarios para cada una de las Asociaciones, asi mismo se puede administrar cada perfil de cada Usuario'),
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--9">
  <div class="header-body">
    <div class="row">
      <div class="col">
        <div lass="mt-5" id="app">
          <div class="card shadow" style="background-color: #003508;">
            <div class="card-body">
              <h1 class="heading-large text-muted mb-4">Introduzca Demandas de servicios financieros y no financieros</h1>
              {{-- <div class="mt-5" id="app"> --}}

                <dema></dema>
              {{-- </div> --}}
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


@endsection
