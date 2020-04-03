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
    <!-- Card stats -->
    <div class="row">
      <div class="col">
        <div class="card shadow">

          <div class="card-body">

              <h1 class="heading-large text-muted mb-4">Datos productivos (Como Socios) </h1>

              <hr class="my-4" />
              <!-- Address -->
              <div class="container d-flex justify-content-center">
                <img src="{{ asset('argon') }}/img/theme/puzzle.gif" alt="Organizacion">
              </div>

              <hr class="my-4" />
              <!-- Description -->
              {{-- <h1 class="heading-large text-muted mb-4">Produccion Agricola </h1> --}}
              <a href="{{URL::action('ProSocioController@create')}}" class="btn btn-primary">Agregar informacion</a>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
