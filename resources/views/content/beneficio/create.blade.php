@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Beneficios que brinda la Organizacion'),
        'description' => __('
En esta seccion se pueden crear nuevos Usuarios para cada una de las Asociaciones, asi mismo se puede administrar cada perfil de cada Usuario'),
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--9">
  <div class="header-body">
    <!-- Card stats -->
    <div class="row">
      <div class="col">
        <div class="card shadow" style="background-color: #003508;">

          <div class="card-body">
            <form method="POST" action="/beneficio">
              {{ csrf_field() }}
              <h1 class="heading-large text-muted mb-4">Cuenta con facilitadores o promotores </h1>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label text-muted">¿ Cuantas son mujeres ?</label>
                          <input type="number" class="form-control my-3" name="cant_muj">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label text-muted">¿ Cuantos son hombres ?</label>
                          <input type="number" class="form-control my-3" name="cant_var">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label text-muted">¿ Cual es su especialidad ?</label>
                          <input type="text" class="form-control my-3" name="espe">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label text-muted">¿ Cuantos se especializan en produccion ecologica ?</label>
                          <input type="number" class="form-control my-3" name="pro_eco">
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <hr class="my-4" />
              <!-- Description -->
              <h1 class="heading-large text-muted mb-4">Alguno de sus socios/as cumplen funciones o son lideres en: </h1>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label text-muted">
                      <input name="gob_mun" type="checkbox" id="cbox1" value="si"> El gobierno municipal
                      </label><br>
                      <label class="form-control-label text-muted" for="cbox2">
                      <input name="org_sim" type="checkbox" id="cbox2" value="si"> Organizaciones similares
                      </label><br>
                      <label class="form-control-label text-muted" for="cbox3">
                      <input name="ong" type="checkbox" id="cbox3" value="si"> ONG o fundaciones
                      </label><br>
                      <label class="form-control-label text-muted" for="cbox4">
                      <input name="gob_dep" type="checkbox" id="cbox4" value="si"> Gobierno departamental/nacional
                      </label><br>
                      <label class="form-control-label text-muted" for="cbox5">
                      <input name="lid_org" type="checkbox" id="cbox5" value="si"> Lideres de organizaciones
                      </label><br>
                      <label class="form-control-label text-muted" for="cbox6">
                      <input name="otro" type="checkbox" id="cbox6" value="si"> Otro
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
