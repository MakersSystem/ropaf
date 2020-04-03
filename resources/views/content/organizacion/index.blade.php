@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Datos de Organizacion'),
    ])
<div class="container-fluid mt--8">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-body">
                <h1 class="heading-large text-muted mb-4">Informacion de la Organizacion </h1>
                <hr class="my-4" />
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Nombre de la Organizacion</label>
                        <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacion->nombre ? : 'No tiene Nombre' }}</p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label text-muted" for="input-email">Sigla</label>
                        <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacion->sigla ? :'No tiene Sigla' }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="row" >
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label text-muted" for="input-first-name">Departamento</label>
                        <div class="mb-4">                          
                          <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacion->departamento ? : 'No tiene Departamento' }}</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label text-muted" for="input-last-name">Provincia</label>
                        <div class="mb-4">                          
                          <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacion->provincia ? : 'No tiene Provincia' }}</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label text-muted" for="input-last-name">Municipio</label>
                        <div class="mb-4">                          
                          <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacion->municipio ? : 'No tiene Municipio'}}</p>
                        </div>
                      </div>
                    </div>
                  </div>                  
              </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Direccion</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-control-label text-muted" for="input-address">Direccion</label>
                        <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacion->direccion ? : 'No tiene Direccion' }}</p>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label class="form-control-label text-muted" for="input-address">Telefono</label>
                        <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacion->telefono ? : 'S/Telf.'}}</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-control-label text-muted" for="input-address">Correo</label>
                        <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacion->correo ? : 'S/Correo' }}</p>
                      </div>
                    </div>
                  </div>                  
                </div>                

                <hr class="my-4" />
                <a href="{{URL('/organizacion/'.$organizacion->id.'/edit')}}" class="btn btn-primary">Editar Informacion</a>
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
