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
              <h1 class="heading-large text-muted mb-4">Datos organizacionales </h1>
              <div class="pl-lg-3">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Fecha Fundacion</label>
                      <input name="fech_funda" type="date" id="input-username" class="form-control form-control-alternative">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-email">Año de afilicaion AOPEB</label>
                      <input name="anio_afili" type="number" id="input-email" class="form-control form-control-alternative">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Personeria juridica</label>
                      <div class="input-group input-group-alternative mb-4">
                        <!-- <input class="form-control" placeholder="Nombre" type="text"> -->
                        <select name="perso_juri" class="form-control">
                         <option value="si">SI</option>
                         <option value="no">NO</option>
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Organigrama (adjuntar)</label>
                      <div class="input-group input-group-alternative mb-4">
                        <!-- <input class="form-control" placeholder="Telefono o Celular" type="text"> -->
                        <select name="organi" class="form-control">
                         <option value="si">SI</option>
                         <option value="no">NO</option>
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Estaturo y reglamento interno</label>
                      <div class="input-group input-group-alternative mb-4">
                        <!-- <input class="form-control" placeholder="Correo Electronico" type="text"> -->
                        <select name="esta_regl" class="form-control">
                         <option value="si">SI</option>
                         <option value="no">NO</option>
                       </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Manual de funciones</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Nombre" type="text"> --}}
                        <select name="manu_func" class="form-control">
                         <option value="si">SI</option>
                         <option value="no">NO</option>
                       </select>
                      </div>

                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">NIT</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Telefono o Celular" type="text"> --}}
                        <select name="nit" class="form-control">
                         <option value="si">SI</option>
                         <option value="no">NO</option>
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">RAU</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Correo Electronico" type="text"> --}}
                        <select name="rau" class="form-control">
                         <option value="si">SI</option>
                         <option value="no">NO</option>
                       </select>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Funda empresas (adjuntar)</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Nombre" type="text"> --}}
                        <select name="fund_empr" class="form-control">
                         <option value="si">SI</option>
                         <option value="no">NO</option>
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Targeta empresarial (adjuntar)</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Telefono o Celular" type="text"> --}}
                        <select name="targ_empr" class="form-control">
                         <option value="si">SI</option>
                         <option value="no">NO</option>
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Registro sanitario</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Correo Electronico" type="text"> --}}
                        <select name="regi_sani" class="form-control">
                         <option value="si">SI</option>
                         <option value="no">NO</option>
                       </select>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="pl-lg-4">
                <div class="row">

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Sello SPG</label>
                      <input name="sello_spg" type="text" id="input-username" class="form-control form-control-alternative">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-email">Certificacion organica</label>
                      <input name="certi_orga" type="text" id="input-email" class="form-control form-control-alternative">
                    </div>
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection --}}
