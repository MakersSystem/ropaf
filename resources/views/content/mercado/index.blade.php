@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Mercado'),
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

              <h1 class="heading-large text-muted mb-4">Mercado </h1>
              <h2 class="heading-large text-muted mb-4">Sus productos cuenta con los criterios de calidad exigido por el mercado en cuanto a: </h2>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Normas Sanitarias (Calidad, inocuidad)</label>
                      <div class="input-group input-group-alternative mb-4">
                       <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $mercado->norm_san }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Tamaño</label>
                      <div class="input-group input-group-alternative mb-4">
                       <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $mercado->tama }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Tipo de insumos y materia prima</label>
                      <div class="input-group input-group-alternative mb-4">
                       <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $mercado->mate_pri }}</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Entrega oportuna</label>
                      <div class="input-group input-group-alternative mb-4">
                       <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $mercado->entr_opr }}</p>
                      </div>

                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Cantidades (volumen)</label>
                      <div class="input-group input-group-alternative mb-4">
                       <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $mercado->cant }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Empaque</label>
                      <div class="input-group input-group-alternative mb-4">
                       <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $mercado->empa }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Etiquetado</label>
                      <div class="input-group input-group-alternative mb-4">
                       <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $mercado->etiq }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Duracion del producto</label>
                      <div class="input-group input-group-alternative mb-4">
                       <p class="card shadow form-control-label text-white bg-dark pl-3 pr-3">{{ $mercado->dura_pro }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <hr class="my-4" />
              {{-- <a href="#" class="btn btn-primary">Editar Informacion</a> --}}
              <a href="{{URL('/mercado/'.$mercado->id.'/edit')}}" class="btn btn-primary">Editar Informacion</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="header-body">
    <div class="row">
      <div class="col">
        <div lass="mt-5" id="app">
          <div class="card shadow" style="background-color: #003508;">
            <div class="card-body">
              <h1 class="heading-large text-muted mb-4">Sus productos cuenta con mercados o clientes, mensione los principales</h1>
                <climer></climer>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
