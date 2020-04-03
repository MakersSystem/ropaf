@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Identificacion de Representantes'),
    ])

<div class="container-fluid mt--8">
  <div class="header-body">
    <!-- Card stats -->
    <div class="row">
      <div class="col">
        <div class="card shadow">

          <div class="card-body">

              <h1 class="heading-large text-muted mb-4">Identificacion de Representantes </h1>

              <hr class="my-4" />
              <!-- Address -->
              <div class="container d-flex justify-content-center">
                <img src="{{ asset('argon') }}/img/theme/representante.gif" alt="Organizacion">
              </div>

              <hr class="my-4" />
              <!-- Description -->
              <a href="{{URL::action('RepresentacionController@create')}}" class="btn btn-primary">Agregar Informacion</a>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
