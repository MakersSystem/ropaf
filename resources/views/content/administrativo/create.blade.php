@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Datos Administrativos'),
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
            <form method="POST" action="/daadmin" enctype="multipart/form-data">
              {{ csrf_field() }}
              <h1 class="heading-large text-muted mb-4">Datos Administrativos </h1>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Sistema contable</label>
                      <div class="mb-4">
                        <!-- <input class="form-control" placeholder="Nombre" type="text"> -->
                        <select name="sis_cont" class="form-control">
                          <option value="NO">NO</option>
                          <option value="SI">SI</option>
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Manual de funciones</label>
                      <div class="mb-4">
                        <!-- <input class="form-control" placeholder="Telefono o Celular" type="text"> -->
                        <select name="man_func" class="form-control">
                          <option value="NO">NO</option>
                          <option value="SI">SI</option>
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Calculo de costos</label>
                      <div class="mb-4">
                        <!-- <input class="form-control" placeholder="Correo Electronico" type="text"> -->
                        <select name="cal_cost" class="form-control">
                          <option value="NO">NO</option>
                          <option value="SI">SI</option>
                       </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Inventario</label>
                      <div class="mb-4">
                        <!-- <input class="form-control" placeholder="Nombre" type="text"> -->
                        <select name="inven" class="form-control">
                          <option value="NO">NO</option>
                          <option value="SI">SI</option>
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Manual de procesos</label>
                      <div class="mb-4">
                        <!-- <input class="form-control" placeholder="Telefono o Celular" type="text"> -->
                        <select name="man_proc" class="form-control">
                          <option value="NO">NO</option>
                          <option value="SI">SI</option>
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Planes o ideas de negocios</label>
                      <div class="mb-4">
                        <!-- <input class="form-control" placeholder="Correo Electronico" type="text"> -->
                        <select name="pla_nego" class="form-control">
                          <option value="NO">NO</option>
                          <option value="SI">SI</option>
                       </select>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-4">
                    <label class="form-control-label text-muted">POA (Adjuntar)</label>
                    <div class="form-group">
                      <div class="input-group">                      
                        <input type="text" class="form-control upl"  id="upload" readonly>
                        <div class="input-group-btn">
                          <span class="fileUpload ni ni-cloud-upload-96 btn btn-outline-success"> Subir
                            <input type="file" name="poa" class="upload up" id="up" onchange="readURL(this);">
                          </span>                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <label class="form-control-label text-muted">PEI (Adjuntar)</label>
                    <div class="form-group">
                      <div class="input-group">                      
                        <input type="text" class="form-control upl"  id="upload" readonly>
                        <div class="input-group-btn">       
                          <span class="fileUpload ni ni-cloud-upload-96 btn btn-outline-success"> Subir
                            <input type="file" name="pei" class="upload up" id="up" onchange="readURL(this);">
                          </span>                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Impuestos al dia</label>
                      <div class="mb-4">
                        <!-- <input class="form-control" placeholder="Correo Electronico" type="text"> -->
                        <select name="imp_dia" class="form-control">
                          <option value="NO">NO</option>
                          <option value="SI">SI</option>
                       </select>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <!-- <hr class="my-4" /> -->
              <!-- Address -->
              <!-- <h6 class="heading-small text-muted mb-4">Personas que trabajan en su organizacion</h6> -->

              <hr class="my-4" />
              <!-- Description -->
              <div class="row">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ url('daadmin') }}" class="btn btn-info">Cancelar</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    @endsection
