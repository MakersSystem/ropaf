@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Datos Economicos'),
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
            <form method="POST" action="{{ url('/economico/'.$economico->id) }}">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              <h1 class="heading-large text-muted mb-4">Datos Economicos </h1>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">¿ La organización apoya a sus  socios en insumos, materia prima, equipos u otros ?</label>
                      <div class="input-group input-group-alternative mb-4">
                        <!-- <input class="form-control" placeholder="Nombre" type="text"> -->
                        <select name="apoya_ins" class="form-control">
                        @if ($economico->apoya_ins == 'si')
                          <option value="no">NO</option>
                          <option value="si" selected="selected">SI</option>
                        @else
                          <option value="no" selected="selected">NO</option>
                          <option value="si">SI</option>
                        @endif
                       </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">¿ Están satisfechos/as con los beneficios que les brinda la organización ?</label>
                      <div class="input-group input-group-alternative mb-4">
                        <!-- <input class="form-control" placeholder="Telefono o Celular" type="text"> -->
                        <select name="satis_org" class="form-control">
                        @if ($economico->satis_org == 'si')
                          <option value="no">NO</option>
                          <option value="si" selected="selected">SI</option>
                        @else
                          <option value="no" selected="selected">NO</option>
                          <option value="si">SI</option>
                        @endif
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
              <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
