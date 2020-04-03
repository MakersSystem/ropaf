{{-- @extends('layouts.app')
@section('content')

<div class="header bg-gradient-success pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->

    </div>
  </div>
</div>

<div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow bg-default">

            <div class="card-body">
              <form method="POST" action="/organizacion">
                {{ csrf_field() }}
                <h1 class="heading-large text-muted mb-4">Registrar Informacion de las Organizaciones </h1>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Nombre de la Organizacion</label>
                        <input name="nombre" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Nombre de Organizacion">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label text-muted" for="input-email">Sigla</label>
                        <input name="sigla" type="text" id="input-email" class="form-control form-control-alternative" placeholder="Sigla">
                      </div>
                    </div>
                  </div>
                  <div id="app">
                    <depmunpro></depmunpro>
                  </div>
                  <div class="row" >
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-address">Representante de la Organizacion</label>
                      <input name="representante" type="text" id="input-address" class="form-control form-control-alternative" placeholder="Representante de la Organizacion" type="text">
                    </div>
                  </div>
                </div>
              </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Direccion</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Direccion</label>
                        <input name="direccion" type="text" id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Organizacion</label>
                        <input name="organizacion" type="text" id="input-city" class="form-control form-control-alternative">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">nivel</label>
                        <input name="nivel" type="number" id="input-country" class="form-control form-control-alternative">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Nro. Comunidades</label>
                        <input name="nro_comu" type="number" id="input-postal-code" class="form-control form-control-alternative">
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="my-4" />
                <!-- Description -->
                <button type="submit" class="btn-primary">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  @endsection --}}
