@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Datos Productivos'),
        'description' => __('
En esta seccion se pueden crear nuevos Usuarios para cada una de las Asociaciones, asi mismo se puede administrar cada perfil de cada Usuario'),
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--9">
  <div class="header-body">

    <div class="row">
      <div class="col">
        <div class="card shadow" style="background-color: #003508;">

          <div class="card-body">
            <form method="POST" action="{{ url('/daprodu/'.$productivo->id_user) }}">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              <h1 class="heading-large text-muted mb-4">Datos productivos </h1>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Actividad principal de la organizacion</label>
                      <input name="acti_prin_orga" type="text" id="input-username" class="form-control form-control-alternative" value="{{ $productivo->acti_prin_orga }}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-email">Estas actividades generan ingreso por:</label>

                      <select name="actividades_ingre" class="form-control">
                        @if ($productivo->actividades_ingre == 'Venta de productos')
                          <option value="Venta de productos" selected="selected">Venta de productos</option>
                        @else
                          <option value="Venta de productos">Venta de productos</option>
                        @endif
                        @if ($productivo->actividades_ingre == 'Venta de servicios')
                          <option value="Venta de servicios" selected="selected">Venta de servicios</option>
                        @else
                          <option value="Venta de servicios">Venta de servicios</option>
                        @endif
                        @if ($productivo->actividades_ingre == 'Gestios proyectos')
                          <option value="Gestios proyectos" selected="selected">Gestion proyectos</option>
                        @else
                          <option value="Gestios proyectos">Gestios proyectos</option>
                        @endif
                        @if ($productivo->actividades_ingre == 'Otros')
                          <option value="Otros" selected="selected">Otros</option>
                        @else
                          <option value="Otros">Otros</option>
                        @endif
                      </select>

                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <h6 class="heading-small text-muted mb-4">Otras actividades que tenga la organizacion</h6>
                <div class="row">
                  <div class="col-lg-12">

                    <div class="form-group">
                      @if ($acti_orga->tuberculos == 'si')
                        <label class="form-control-label text-muted">
                          <input name="tuberculos" type="checkbox" value="si" checked> Tuberculos
                        </label>
                      @else
                        <label class="form-control-label text-muted">
                          <input name="tuberculos" type="checkbox" value="si"> Tuberculos
                        </label>
                      @endif
                      <br>
                      @if ($acti_orga->cafetaleros == 'si')
                        <label class="form-control-label text-muted" for="cbox2">
                          <input name="cafetaleros" type="checkbox" value="si" checked> Cafetaleros
                        </label>
                      @else
                        <label class="form-control-label text-muted">
                          <input name="cafetaleros" type="checkbox" value="si"> Cafetaleros
                        </label>
                      @endif
                    </div>
                  </div>
                </div>

                <hr class="my-4" />
                <h6 class="heading-small text-muted mb-4">¿Cual es su Rubro principal?</h6>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      @if ($rubro_prin->agricola == 'si')
                        <label class="form-control-label text-muted">
                          <input name="agricola" type="checkbox" value="si" checked> Agricola
                        </label>
                      @else
                        <label class="form-control-label text-muted">
                          <input name="agricola" type="checkbox" value="si"> Agricola
                        </label>
                      @endif
                      <br>
                      @if ($rubro_prin->pecuario == 'si')
                        <label class="form-control-label text-muted" for="cbox2">
                          <input name="pecuario" type="checkbox" value="si" checked> Pecuario
                        </label>
                      @else
                        <label class="form-control-label text-muted">
                          <input name="pecuario" type="checkbox" value="si"> Pecuario
                        </label>
                      @endif
                      <br>
                      @if ($rubro_prin->psicola == 'si')
                      <label class="form-control-label text-muted" for="cbox3">
                        <input name="psicola" type="checkbox" value="si" checked> Psicola
                      </label>
                      @else
                        <label class="form-control-label text-muted">
                          <input name="psicola" type="checkbox" value="si"> Psicola
                        </label>
                      @endif
                      <br>
                      @if ($rubro_prin->avicola == 'si')
                        <label class="form-control-label text-muted" for="cbox4">
                          <input name="avicola" type="checkbox" value="si" checked> Avicola
                        </label>
                      @else
                        <label class="form-control-label text-muted">
                          <input name="avicola" type="checkbox" value="si"> Avicola
                        </label>
                      @endif
                      <br>
                      @if ($rubro_prin->forestal == 'si')
                        <label class="form-control-label text-muted" for="cbox5">
                          <input name="forestal" type="checkbox" value="si" checked> Forestal
                        </label>
                      @else
                        <label class="form-control-label text-muted">
                          <input name="forestal" type="checkbox" value="si"> Forestal
                        </label>
                      @endif
                    </div>
                  </div>
                </div>

                <hr class="my-4" />
                <h6 class="heading-small text-muted mb-4">Su origen de produccion o servicio que brinda su organizacion es:</h6>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      @if ($origen_prod->tradicional == 'si')
                        <label class="form-control-label text-muted">
                        <input name="tradicional" type="checkbox" value="si" checked> Tradicional
                        </label>
                      @else
                        <label class="form-control-label text-muted">
                        <input name="tradicional" type="checkbox" value="si"> Tradicional
                        </label>
                      @endif
                      <br>
                      @if ($origen_prod->convencional == 'si')
                        <label class="form-control-label text-muted" for="cbox2">
                        <input name="convencional" type="checkbox" value="si" checked> Convencional
                        </label>
                      @else
                        <label class="form-control-label text-muted" for="cbox2">
                        <input name="convencional" type="checkbox" value="si"> Convencional
                        </label>
                      @endif
                      <br>
                      @if ($origen_prod->agroindustrial == 'si')
                        <label class="form-control-label text-muted" for="cbox3">
                        <input name="agroindustrial" type="checkbox" value="si" checked> Agroindustrial
                        </label>
                      @else
                        <label class="form-control-label text-muted" for="cbox3">
                        <input name="agroindustrial" type="checkbox" value="si"> Agroindustrial
                        </label>
                      @endif
                      <br>
                      @if ($origen_prod->trad_tran == 'si')
                        <label class="form-control-label text-muted" for="cbox4">
                        <input name="trad_tran" type="checkbox" value="si" checked> Tradicional en transicion
                        </label>
                      @else
                        <label class="form-control-label text-muted" for="cbox3">
                        <input name="trad_tran" type="checkbox" value="si"> Tradicional en transicion
                        </label>
                      @endif
                      <br>
                      @if ($origen_prod->ecologico == 'si')
                        <label class="form-control-label text-muted" for="cbox5">
                        <input name="ecologico" type="checkbox" value="si" checked> Ecologico
                        </label>
                      @else
                        <label class="form-control-label text-muted" for="cbox3">
                        <input name="ecologico" type="checkbox" value="si"> Ecologico
                        </label>
                      @endif
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
              </div>
              <button type="submit" class="btn btn-primary">Guardar Datos</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
