@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Datos de Organizacion'),
    ])

<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="card shadow-lg">
          <div class="card-body shadow-lg">
            <form method="POST" action="/organizacion">
              {{ csrf_field() }}
              <h1 class="heading-large text-muted mb-4">Registrar Informacion de las Organizaciones </h1>
              <hr class="my-4" />
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Nombre de la Organizacion</label>
                      <input name="nombre" type="text" id="input-username" class="form-control shadow-lg" placeholder="Nombre de Organizacion" style="text-transform: uppercase">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-email">Sigla</label>
                      <input name="sigla" type="text" id="input-email" class="form-control shadow-lg" placeholder="Sigla" style="text-transform: uppercase">
                    </div>
                  </div>
                </div>
                <div id="app">
                  <depmunpro></depmunpro>
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
                      <input name="direccion" type="text" id="input-address" class="form-control shadow-lg" placeholder="Direccion" style="text-transform: uppercase">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-address">Telefono</label>
                      <input name="telefono" type="number" id="input-address" class="form-control shadow-lg" style="text-transform: uppercase">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-address">Correo</label>
                      <input name="correo" type="email" id="input-address" class="form-control shadow-lg" style="text-transform: lowercase">
                    </div>
                  </div>
                </div>
              </div>

              <hr class="my-4" />
              <!-- Description -->
              <div class="row">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ url('organizacion') }}" class="btn btn-info">Cancelar</a>
              </div>
            </form>
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
