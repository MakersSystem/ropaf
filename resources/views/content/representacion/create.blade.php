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
            <form method="POST" action="/representacion">
              {{ csrf_field() }}
              <h1 class="heading-large text-muted mb-4" style="text-shadow: 0.2px 0.2px 1px #000000;">Identificacion de Representantes </h1>
              <div class="pl-lg-4">

                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name" style="text-shadow: 0.2px 0.2px 0.4px #000000;">Nombre Dirigente</label>
                      <div class="mb-4">
                        <input name="nombre_presi" class="form-control shadow" placeholder="Nombre" type="text" style="text-transform: uppercase;">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name" style="text-shadow: 0.2px 0.2px 0.4px #000000;">Telf. / Cel</label>
                      <div class="mb-4">
                        <input name="telefono_presi" class="form-control shadow" placeholder="Telefono o Celular" type="number">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name" style="text-shadow: 0.2px 0.2px 0.4px #000000;">Cargo</label>
                      <div class="mb-4">
                        <input name="correo_presi" class="form-control shadow" placeholder="Cargo" type="text" style="text-transform: lowercase;">
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name" style="text-shadow: 0.2px 0.2px 0.4px #000000;">¿Cuál el producto o servicio que ofrece la organización?</label>
                      <div class="mb-4">
                        <textarea name="nombre_vicep" class="form-control shadow" placeholder="Escribir..." type="text" style="text-transform: uppercase;"></textarea>

                      </div>

                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name" style="text-shadow: 0.2px 0.2px 0.4px #000000;">¿Dónde comercializan su producto?</label>
                      <div class="mb-4">
                        <textarea name="telefono_vicep" class="form-control shadow" placeholder="Escribir..." type="text"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name" style="text-shadow: 0.2px 0.2px 0.4px #000000;">¿Cuentan con algun emprendimiento empresarial o de transformacion?</label>
                      <div class="mb-4">
                        <textarea name="correo_vicep" class="form-control shadow" placeholder="Escribir..." type="email"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <label class="form-control-label text-muted" style="text-shadow: 0.2px 0.2px 0.4px #000000;">¿Donde y cual el destino de comercializacion del producto transformado?</label>
                <div class="row">                  
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name" style="text-shadow: 0.2px 0.2px 0.4px #000000;">Precio Bs.</label>
                      <div class="mb-4">
                        <input name="nombre_geren" class="form-control shadow" placeholder="Precio" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name" style="text-shadow: 0.2px 0.2px 0.4px #000000;">Destino</label>
                      <div class="mb-4">
                        <input name="telefono_geren" class="form-control shadow" placeholder="Destino" type="text">
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
              <hr class="my-4" />
              <!-- Address -->
              <h1 class="heading-large text-muted mb-4" style="text-shadow: 0.2px 0.2px 1px #000000;">Personas que trabajan en su organizacion</h1>
              <div class="pl-lg-4">
                <label class="form-control-label text-muted" style="text-shadow: 0.2px 0.2px 0.4px #000000;">¿Cuantos Miembros tiene su Organizacion?</label>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted" style="text-shadow: 0.2px 0.2px 0.4px #000000;">Nro. Varones</label>
                      <input name="nro_var_tra" type="number" id="hombres" class="form-control shadow" placeholder="Nro.">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted" style="text-shadow: 0.2px 0.2px 0.4px #000000;">Nro. Mujeres</label>
                      <input name="nro_muj_tra" type="number" id="mujeres" class="form-control shadow" placeholder="Nro.">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted" style="text-shadow: 0.2px 0.2px 0.4px #000000;">Total</label>
                      <input type="number" id="total" class="form-control shadow" placeholder="Nro." onclick="calc();">
                      {{-- <p id="total" class="form-control-label text-muted"></p> --}}
                    </div>
                  </div>
                </div>
                <div class="row">                  
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-country" style="text-shadow: 0.2px 0.2px 0.4px #000000;">¿Cuenta con Personeria Juridica la organizacion?</label>
                      <select name="socios_son" class="form-control">
                       <option value="NO">NO</option>
                       <option value="SI">SI</option>
                     </select>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-country" style="text-shadow: 0.2px 0.2px 0.4px #000000;">¿Cuenta con registro SENASAG?</label>
                      <select name="nro_pers_perm" class="form-control">
                       <option value="NO">NO</option>
                       <option value="SI">SI</option>
                     </select>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-country" style="text-shadow: 0.2px 0.2px 0.4px #000000;">¿Cuenta con algun convenio o apoyo del Municipio?</label>
                      <select name="nro_pers_even" class="form-control">
                       <option value="NO">NO</option>
                       <option value="SI">SI</option>
                     </select>
                    </div>
                  </div>
                </div>

              </div>
              <hr class="my-4" />
              <!-- Description -->
              <div class="row">
                <button type="submit" class="btn btn-primary">Guardar</button>
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
