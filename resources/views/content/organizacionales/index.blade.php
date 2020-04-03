@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Datos Organizacionales'),
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
              <h1 class="heading-large text-muted mb-4">Datos organizacionales </h1>
              <hr class="my-4" />
              <div class="pl-lg-3">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Fecha Fundacion</label>                      
                      <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacionales->fech_funda ? : '(No hay datos)' }}</p>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-email">Año de afilicaion AOPEB</label>
                      <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacionales->anio_afili ?: '(No hay datos)' }}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Personeria juridica</label>
                      <div class="mb-4">                        
                       <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacionales->perso_juri }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Organigrama</label>
                      <div class="mb-4">
                        @if (!empty($organizacionales->organi))
                          <p class="form-control-label text-primary pl-3 pr-3"><a href="{{asset('/pdf/organigrama/').'/'.$organizacionales->organi}}" target="_blank" class="btn btn-outline-success p-1 pl-3 pr-3"><i class="ni ni-cloud-download-95"></i> Descargar Organigrama</a></p>                          
                        @else
                          <p class="card form-control-label text-primary pl-3 pr-3">(No hay datos)</p>
                        @endif                      
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Estatuto y reglamento interno</label>
                      <div class="mb-4">
                       @if (!empty($organizacionales->esta_regl))
                          <p class="form-control-label text-primary pl-3 pr-3"> <a href="{{asset('/pdf/estatutos_reglamentos/').'/'.$organizacionales->esta_regl}}" target="_blank" class="btn btn-outline-success p-1 pl-3 pr-3"><i class="ni ni-cloud-download-95"></i> Descargar Est. y Reg. </a></p>
                       @else
                          <p class="card form-control-label text-primary pl-3 pr-3">(No hay datos)</p>
                       @endif
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Manual de funciones</label>
                      <div class="mb-4">                        
                       <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacionales->manu_func }}</p>
                      </div>

                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">NIT</label>
                      <div class="mb-4">
                        @if (!empty($organizacionales->nit))
                          <p class="form-control-label text-primary pl-3 pr-3"> <a href="{{asset('/pdf/nit/').'/'.$organizacionales->nit}}" target="_blank" class="btn btn-outline-success p-1 pl-3 pr-3"><i class="ni ni-cloud-download-95"></i> Descargar NIT </a></p>                            
                        @else
                          <p class="card form-control-label text-primary pl-3 pr-3">(No hay datos)</p>  
                        @endif
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">RAU</label>
                      <div class="mb-4">                        
                       <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacionales->rau }}</p>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Funda empresas</label>
                      <div class="mb-4">
                        @if (!empty($organizacionales->fund_empr))
                          <p class="form-control-label text-primary pl-3 pr-3"><a href="{{asset('/pdf/funda_empresas/').'/'.$organizacionales->fund_empr}}" target="_blank" class="btn btn-outline-success p-1 pl-3 pr-3"><i class="ni ni-cloud-download-95"></i> Descargar Funda Empresa</a></p>
                        @else
                          <p class="card form-control-label text-primary pl-3 pr-3">(No hay datos)</p> 
                        @endif                                               
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Targeta empresarial</label>
                      <div class="mb-4">                        
                       <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacionales->targ_empr }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Registro sanitario</label>
                      <div class="mb-4">
                       <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacionales->regi_sani }}</p>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="row">

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Sello SPG</label>                      
                      <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacionales->sello_spg }}</p>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-email">Certificacion organica</label>                      
                      <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacionales->certi_orga ? : '(No hay datos)'}}</p>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-email">Tipo de certificacion</label>                      
                      <p class="card form-control-label text-primary pl-3 pr-3">{{ $organizacionales->sello_seg  ?: '(No hay datos)'}}</p>
                    </div>
                  </div>
                </div>
              </div>

              <hr class="my-4" />
              <!-- Description -->
              <a href="{{URL('/daorgani/'.$organizacionales->id.'/edit')}}" class="btn btn-primary">Editar Informacion</a>
          </div>
        </div>

        <div class="card shadow">

          <div class="card-body">


          <h1 class="heading-large text-muted mb-5 mt-4">Introduzca los principales problemas organizacionales</h1>
          <div class="mt--5" id="app">
            <hr class="my-4"/>
            <proorgani/>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
