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
            <form method="POST" action="{{ url('/mercado/'.$mercado->id) }}">
              {{ method_field('PATCH') }}
              {{ csrf_field() }}
              <h1 class="heading-large text-muted mb-4">Mercado </h1>
              <h2 class="heading-large text-muted mb-4">Sus productos cuenta con los criterios de calidad exigido por el mercado en cuanto a: </h2>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Normas Sanitarias (Calidad, inocuidad)</label>
                      <div class="input-group input-group-alternative mb-4">
                        <!-- <input class="form-control" placeholder="Nombre" type="text"> -->
                        <select name="norm_san" class="form-control">
                          @if($mercado->norm_san == 'si')
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
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Tamaño</label>
                      <div class="input-group input-group-alternative mb-4">
                        <!-- <input class="form-control" placeholder="Telefono o Celular" type="text"> -->
                        <select name="tama" class="form-control">
                          @if($mercado->tama == 'si')
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
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Tipo de insumos y materia prima</label>
                      <div class="input-group input-group-alternative mb-4">
                        <!-- <input class="form-control" placeholder="Correo Electronico" type="text"> -->
                        <select name="mate_pri" class="form-control">
                          @if($mercado->mate_pri == 'si')
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

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Entrega oportuna</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Nombre" type="text"> --}}
                        <select name="entr_opr" class="form-control">
                          @if($mercado->entr_opr == 'si')
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
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Cantidades (volumen)</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Telefono o Celular" type="text"> --}}
                        <select name="cant" class="form-control">
                          @if($mercado->cant == 'si')
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
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Empaque</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Correo Electronico" type="text"> --}}
                        <select name="empa" class="form-control">
                          @if($mercado->empa == 'si')
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


                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Etiquetado</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Nombre" type="text"> --}}
                        <select name="etiq" class="form-control">
                          @if($mercado->etiq == 'si')
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
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Duracion del producto</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Telefono o Celular" type="text"> --}}
                        <select name="dura_pro" class="form-control">
                          @if($mercado->dura_pro == 'si')
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
