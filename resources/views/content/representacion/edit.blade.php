@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Editar Representacion'),
        'description' => __('En esta seccion puede llenar los datos de representantes de su Organizacion'),
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--9">
  <div class="header-body">
    <!-- Card stats -->
    <div class="row">
      <div class="col">
        <div class="card shadow">

          <div class="card-body">
            <form method="POST" action="{{ url('/representacion/'.$representacion->id_user) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              <h1 class="heading-large text-muted mb-4">Representaciones </h1>
              <div class="pl-lg-4">

                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Presidente</label>
                      <div class="mb-4">
                        <input name="nombre_presi" class="form-control shadow" placeholder="Presidente" type="text" value="{{ $representacion->nombre_presi }}">

                      </div>

                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Telf. / Cel</label>
                      <div class="mb-4">
                        <input name="telefono_presi" class="form-control shadow" placeholder="Telf. / Cel" type="text" value="{{ $representacion->telefono_presi }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Correo</label>
                      <div class="mb-4">
                        <input name="correo_presi" class="form-control shadow" placeholder="Correo" type="email" value="{{ $representacion->correo_presi }}">
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Vicepresidente</label>
                      <div class="mb-4">
                        <input name="nombre_vicep" class="form-control shadow" placeholder="Vicepresidente" type="text" value="{{ $representacion->nombre_vicep }}">

                      </div>

                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Telf. / Cel</label>
                      <div class="mb-4">
                        <input name="telefono_vicep" class="form-control shadow" placeholder="Telf. / Cel" type="text" value="{{ $representacion->telefono_vicep }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Correo</label>
                      <div class="mb-4">
                        <input name="correo_vicep" class="form-control shadow" placeholder="Correo" type="email" value="{{ $representacion->correo_vicep }}">
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Gerente</label>
                      <div class="mb-4">
                        <input name="nombre_geren" class="form-control shadow" placeholder="Gerente" type="text" value="{{ $representacion->nombre_geren }}">

                      </div>

                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Telf. / Cel</label>
                      <div class="mb-4">
                        <input name="telefono_geren" class="form-control shadow" placeholder="Telf. / Cel" type="text" value="{{ $representacion->telefono_geren }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Correo</label>
                      <div class="mb-4">
                        <input name="correo_geren" class="form-control shadow" placeholder="Correo" type="email" value="{{ $representacion->correo_geren }}">
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <hr class="my-4" />
              <!-- Address -->
              <h1 class="heading-large text-muted mb-4">Personas que trabajan en su organizacion</h1>
              <label class="form-control-label text-muted">¿Cuantos Miembros tiene el Directorio?</label>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Nro. Varones</label>
                      <input name="nro_var_dir" type="number" id="hombresdir" class="form-control shadow" value="{{ $representacion->nro_var_dir }}">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Nro. Mujeres</label>
                      <input name="nro_muj_dir" type="number" id="mujeresdir" class="form-control" value="{{ $representacion->nro_muj_dir }}">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Total</label>
                      <input type="number" id="totaldir" class="form-control shadow" onclick="calcdir();" value="{{ $representacion->nro_var_dir +$representacion->nro_muj_dir }}">
                    </div>
                  </div>
                </div>
              </div>
              <label class="form-control-label text-muted">¿Cuantos Miembros tiene su Organizacion?</label>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Nro. Varones</label>
                      <input name="nro_var_tra" type="number" id="hombres" class="form-control shadow" placeholder="" value="{{ $representacion->nro_var_tra }}">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Nro. Mujeres</label>
                      <input name="nro_muj_tra" type="number" id="mujeres" class="form-control shadow" placeholder="" value="{{ $representacion->nro_muj_tra }}">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Total</label>
                      <input type="number" id="total" class="form-control shadow" onclick="calc();" value="{{$representacion->nro_var_tra + $representacion->nro_muj_tra }}">
                      {{-- <p id="total" class="form-control-label text-muted"></p> --}}
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-city">Nro. Personal Permanente</label>
                      <input name="nro_pers_perm" type="number" id="input-city" class="form-control shadow" placeholder="Nro" value="{{ $representacion->nro_pers_perm }}">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-country">Nro. Personal Eventual</label>
                      <input name="nro_pers_even" type="number" id="input-country" class="form-control shadow" placeholder="Nro" value="{{ $representacion->nro_pers_even }}">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-country">Nro. Jovenes</label>
                      <input name="nro_jove" type="number" id="input-postal-code" class="form-control shadow" placeholder="Nro" value="{{ $representacion->nro_jove }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-city">Nro. Socios Varones</label>
                      <input name="nro_var_soc" type="number" id="sochombres" class="form-control shadow" value="{{ $representacion->nro_var_soc }}">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-country">Nro. Socios Mujeres</label>
                      <input name="nro_muj_soc" type="number" id="socmujeres" class="form-control shadow" value="{{ $representacion->nro_muj_soc }}">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-country">Nro. Socios En Total</label>
                      <input type="number" id="soctotal" class="form-control shadow" onclick="calc2();" value="{{ $representacion->nro_var_soc + $representacion->nro_muj_soc }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-city">Nro. Promedio de miembros por familia</label>
                      <input name="nro_pro_mie" type="number" id="input-city" class="form-control shadow" placeholder="Nro" value="{{ $representacion->nro_pro_mie }}">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-country">Total Beneficiarios indirecto</label>
                      <input name="tot_bene" type="number" id="input-country" class="form-control shadow" placeholder="Nro" value="{{ $representacion->tot_bene }}">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-country">Sus socios son</label>
                      {{-- <input name="socios_son" type="text" id="input-postal-code" class="form-control form-control-alternative" placeholder="Nro"> --}}
                      <select name="socios_son" class="form-control">
                        <option selected value="{{ $representacion->socios_son }}">{{ $representacion->socios_son }}</option>
                        <option value="PRODUCTORES">PRODUCTORES</option>
                        <option value="FAMILIAS">FAMILIAS</option>
                        <option value="COMUNIDADES">COMUNIDADES</option>
                        <option value="ORGANIZACIONES">ORGANIZACIONES</option>
                        <option value="OTROS">OTROS</option>
                     </select>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <!-- Description -->
              <div class="row">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ url('representacion') }}" class="btn btn-info">Cancelar</a>                
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
