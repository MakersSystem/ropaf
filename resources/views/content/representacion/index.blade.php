@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Identificacion de Representantes '),
    ])

<div class="container-fluid mt--8">
  <div class="header-body">
    <!-- Card stats -->
    <div class="row">
      <div class="col">
        <div class="card shadow">

          <div class="card-body">

              <h1 class="heading-large text-muted mb-4">Identificacion de Representantes  </h1>
              <div class="pl-lg-4">
                <hr class="my-4"/>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Nombre Dirigente</label>
                      <div class="mb-4">
                        <p class="card form-control-label text-primary pl-3 pr-3">{{ $representacion->nombre_presi ?: '(No Hay datos)' }}</p>
                      </div>

                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Telf. / Cel</label>
                      <div class="mb-4">                        
                        <p class="card form-control-label text-primary pl-3 pr-3">{{ $representacion->telefono_presi ? : '(No hay datos)' }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Cargo</label>
                      <div class="mb-4">                        
                        <p class="card form-control-label text-primary pl-3 pr-3">{{ $representacion->correo_presi ?: '(No hay datos)'}}</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Producto o Servicio que Ofrece la Organización</label>
                      <div class="mb-4">                        
                        <p class="card form-control-label text-primary pl-3 pr-3">{{ $representacion->nombre_vicep ?: '(No hay datos)'}}</p>
                      </div>

                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Lugar de Comercializacion su Producto</label>
                      <div class="mb-4">                        
                        <p class="card form-control-label text-primary pl-3 pr-3">{{ $representacion->telefono_vicep ? : '(No hay datos)'}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Emprendimiento Empresarial o de Transformacion</label>
                      <div class="mb-4">                        
                        <p class="card form-control-label text-primary pl-3 pr-3">{{ $representacion->correo_vicep ? : '(No hay datos)' }}</p>
                      </div>
                    </div>
                  </div>
                </div>
                <label class="form-control-label text-muted" style="text-shadow: 0.2px 0.2px 0.4px #000000;">Destino de comercializacion del producto Transformado</label>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      
                      <label class="form-control-label text-muted" for="input-first-name">Precio Bs.</label>
                      <div class="mb-4">                        
                        <p class="card form-control-label text-primary pl-3 pr-3">{{ $representacion->nombre_geren ? : '(No hay datos)' }}</p>
                      </div>
  
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Destino</label>
                      <div class="mb-4">                        
                        <p class="card form-control-label text-primary pl-3 pr-3">{{ $representacion->telefono_geren ? : '(No hay datos)' }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>              
              <!-- Address -->
              <hr class="my-4"/>
              <h1 class="heading-large text-muted mb-4">Personas que trabajan en su organizacion</h1>
              <hr class="my-4"/>
              
              <label class="form-control-label text-muted">¿Cuantos Miembros tiene su Organizacion?</label>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Varones</label>
                      {{-- <input type="number" id="hombres" class="form-control form-control-alternative"> --}}
                      <p class="card form-control-label text-primary pl-3 pr-3">{{ $representacion->nro_var_tra ? : '(S/N)' }}</p>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Mujeres</label>
                      {{-- <input type="number" id="mujeres" class="form-control form-control-alternative"> --}}
                      <p class="card form-control-label text-primary pl-3 pr-3">{{ $representacion->nro_muj_tra ? : '(S/N)' }}</p>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Total</label>
                      {{-- <input type="number" id="total" class="form-control form-control-alternative" onclick="calc();"> --}}
                      {{-- <p id="total" class="form-control-label text-muted"></p> --}}
                      <p class="card form-control-label text-primary pl-3 pr-3">{{$representacion->nro_var_tra + $representacion->nro_muj_tra }}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-city">Personeria Juridica la organizacion</label>
                      {{-- <input type="number" id="input-city" class="form-control form-control-alternative" placeholder="Nro"> --}}
                      <p class="card form-control-label text-primary pl-3 pr-3">{{ $representacion->nro_pers_perm ? : '(S/N)' }}</p>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-country">Registro SENASAG</label>
                      {{-- <input type="number" id="input-country" class="form-control form-control-alternative" placeholder="Nro"> --}}
                      <p class="card form-control-label text-primary pl-3 pr-3">{{ $representacion->nro_pers_even ? : '(S/N)' }}</p>
                    </div>
                  </div>                  
                </div>
                
                <div class="row">                  
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-country">¿Cuenta con algun convenio o apoyo del Municipio?</label>
                      {{-- <input type="text" id="input-postal-code" class="form-control form-control-alternative" placeholder="Nro"> --}}
                      <p class="card form-control-label text-primary pl-3 pr-3">{{ $representacion->socios_son ? : '(No hay datos)' }}</p>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <!-- Description -->
              <div class="row">
                <a href="{{URL('/representacion/'.$representacion->id.'/edit')}}" class="btn btn-primary">Editar Informacion</a>                
              </div>
              
          </div>
        </div>

        <div class="card shadow">

          <div class="card-body">          
          <h1 class="heading-large text-muted mb-4">Introduzca los principales problemas de representacion</h1>
          <div id="app">
            <hr class="m-4"/>
            <prorepre/>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





@endsection
