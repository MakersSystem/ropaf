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
  <div class="header-body">
    <!-- Card stats -->
    <div class="row">
      <div class="col">
        <div class="card shadow bg-default">

          <div class="card-body">
            <form>
              <h1 class="heading-large text-muted mb-4">Representaciones </h1>
              <div class="pl-lg-4">

                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Presidente</label>
                      <div class="input-group input-group-alternative mb-4">
                        <input class="form-control" placeholder="Nombre" type="text">

                      </div>

                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Telf. / Cel</label>
                      <div class="input-group input-group-alternative mb-4">
                        <input class="form-control" placeholder="Telefono o Celular" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Correo</label>
                      <div class="input-group input-group-alternative mb-4">
                        <input class="form-control" placeholder="Correo Electronico" type="text">
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Vicepresidente</label>
                      <div class="input-group input-group-alternative mb-4">
                        <input class="form-control" placeholder="Nombre" type="text">

                      </div>

                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Telf. / Cel</label>
                      <div class="input-group input-group-alternative mb-4">
                        <input class="form-control" placeholder="Telefono o Celular" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Correo</label>
                      <div class="input-group input-group-alternative mb-4">
                        <input class="form-control" placeholder="Correo Electronico" type="text">
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Gerente</label>
                      <div class="input-group input-group-alternative mb-4">
                        <input class="form-control" placeholder="Nombre" type="text">

                      </div>

                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Telf. / Cel</label>
                      <div class="input-group input-group-alternative mb-4">
                        <input class="form-control" placeholder="Telefono o Celular" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Correo</label>
                      <div class="input-group input-group-alternative mb-4">
                        <input class="form-control" placeholder="Correo Electronico" type="text">
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <hr class="my-4" />
              <!-- Address -->
              <h6 class="heading-small text-muted mb-4">Personas que trabajan en su organizacion</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Varones</label>
                      <input type="number" id="hombres" class="form-control form-control-alternative">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Mujeres</label>
                      <input type="number" id="mujeres" class="form-control form-control-alternative">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Total</label>
                      <input type="number" id="total" class="form-control form-control-alternative" onclick="calc();">
                      {{-- <p id="total" class="form-control-label text-muted"></p> --}}
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-city">Nro. Personal Permanente</label>
                      <input type="number" id="input-city" class="form-control form-control-alternative" placeholder="Nro">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Nro. Personal Eventual</label>
                      <input type="number" id="input-country" class="form-control form-control-alternative" placeholder="Nro">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Nro. Jovenes</label>
                      <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Nro">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-city">Nro. Socios Varones</label>
                      <input type="number" id="sochombres" class="form-control form-control-alternative">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Nro. Socios Mujeres</label>
                      <input type="number" id="socmujeres" class="form-control form-control-alternative">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Nro. Socios En Total</label>
                      <input type="number" id="soctotal" class="form-control form-control-alternative" onclick="calc2();">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-city">Nro. Promedio de miembros por familia</label>
                      <input type="number" id="input-city" class="form-control form-control-alternative" placeholder="Nro">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Total Beneficiarios indirecto</label>
                      <input type="number" id="input-country" class="form-control form-control-alternative" placeholder="Nro">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Sus socios son</label>
                      <input type="text" id="input-postal-code" class="form-control form-control-alternative" placeholder="Nro">
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <!-- Description -->
              <button class="btn-primary">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection --}}
