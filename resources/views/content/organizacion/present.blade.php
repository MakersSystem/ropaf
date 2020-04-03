@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Organizacion'),
        'description' => __('En esta seccion puede llenar los datos principales de la Organizacion'),
        'class' => 'col-lg-7'
    ])


<div class="container-fluid mt--9">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">

            <div class="card-body">


                <h1 class="heading-large text-muted mb-4">Informacion de la Organizacion </h1>

                <hr class="my-4" />
                <!-- Address -->
                <div class="container d-flex justify-content-center">
                  <img src="{{ asset('argon') }}/img/theme/organizacion-gif-animado.gif" alt="Organizacion">
                </div>

                <hr class="my-4" />
                <!-- Description -->
                <a href="{{URL::action('OrganizacionController@create')}}" class="btn btn-primary">Agregar Informacion</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <!-- Footer -->
      <footer class="footer" style="background-color: #F2FCF3;">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; {{ now()->year }} <a href="" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Equipo Creativo</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Division TIC</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Acerca De</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">AOPEB</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Licencia </a>
                    </li>
                </ul>
          </div>
        </div>
      </footer>
    </div>
  @endsection
