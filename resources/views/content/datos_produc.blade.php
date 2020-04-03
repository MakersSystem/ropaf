{{-- @extends('layouts.app')
@section('content')

<div class="header bg-gradient-success pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">

    </div>
  </div>
</div>

<div class="header bg-gradient-success pb-2 pt-5 pt-md-8">
  <div class="container-fluid mt--7">
    <div class="header-body">

      <div class="row">
        <div class="col">
          <div class="card shadow bg-default">

            <div class="card-body">
              <form>
                <h1 class="heading-large text-muted mb-4">Datos productivos </h1>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Actividad principal de la organizacion</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Nro">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label text-muted" for="input-email">Estas actividades generan ingreso por:</label>

                        <select class="form-control">
                          <option value="productos">Venta de productos</option>
                          <option value="servicios">Venta de servicios</option>
                          <option value="proyectos">Gestion proyectos</option>
                          <option value="otros">Otros</option>
                       </select>
                      </div>
                    </div>
                  </div>
                  <hr class="my-4" />
                  <h6 class="heading-small text-muted mb-4">Otras actividades que tenga la organizacion</h6>
                  <div class="row">
                    <div class="col-lg-12">

                      <div class="form-group">
                        <label class="form-control-label text-muted">
                        <input type="checkbox" id="cbox1" value="first_checkbox"> Tuberculos
                        </label><br>
                        <label class="form-control-label text-muted" for="cbox2">
                        <input type="checkbox" id="cbox2" value="second_checkbox"> Cafetaleros
                        </label>
                      </div>

                    </div>
                  </div>

                  <hr class="my-4" />
                  <h6 class="heading-small text-muted mb-4">Cual es su rubro principal</h6>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label text-muted">
                        <input type="checkbox" id="cbox1" value="first_checkbox"> Agricola
                        </label><br>
                        <label class="form-control-label text-muted" for="cbox2">
                        <input type="checkbox" id="cbox2" value="second_checkbox"> Pecuario
                        </label><br>
                        <label class="form-control-label text-muted" for="cbox3">
                        <input type="checkbox" id="cbox3" value="second_checkbox"> Psicola
                        </label><br>
                        <label class="form-control-label text-muted" for="cbox4">
                        <input type="checkbox" id="cbox4" value="second_checkbox"> Avicola
                        </label><br>
                        <label class="form-control-label text-muted" for="cbox5">
                        <input type="checkbox" id="cbox5" value="second_checkbox"> Forestal
                        </label>
                      </div>
                    </div>
                  </div>

                  <hr class="my-4" />
                  <h6 class="heading-small text-muted mb-4">Su origen de produccion o servicio que brinda su organizacion es:</h6>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label text-muted">
                        <input type="checkbox" id="cbox1" value="first_checkbox"> Tradicional
                        </label><br>
                        <label class="form-control-label text-muted" for="cbox2">
                        <input type="checkbox" id="cbox2" value="second_checkbox"> Convencional
                        </label><br>
                        <label class="form-control-label text-muted" for="cbox3">
                        <input type="checkbox" id="cbox3" value="second_checkbox"> Agroindustrial
                        </label><br>
                        <label class="form-control-label text-muted" for="cbox4">
                        <input type="checkbox" id="cbox4" value="second_checkbox"> Tradicional en transicion
                        </label><br>
                        <label class="form-control-label text-muted" for="cbox5">
                        <input type="checkbox" id="cbox5" value="second_checkbox"> Ecologico
                        </label>
                      </div>
                    </div>
                  </div>

                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main-content">
  <div class="header bg-gradient-success pb-2 pt-5 pt-md-2">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row">
        <div class="col">
        <div class="card shadow bg-default">

          <div class="card-body">

              <hr class="my-4"/>
              <h6 class="heading-small text-muted mb-4">Introduzca los productos</h6>
              <div class="mt-5" id="app">
              {{-- <div class="pl-lg-4">
              <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Producto</label>
                        <input type="text" class="form-control my-3" v-model="nuevaTarea" v-on:keyup.enter="agregarTarea">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Caracteristicas</label>
                        <input type="text" class="form-control my-3" v-model="nuevaTarea" v-on:keyup.enter="agregarTarea">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Presentacion comercial</label>
                        <input type="text" class="form-control my-3" v-model="nuevaTarea" v-on:keyup.enter="agregarTarea">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Cuantas veces al año produce</label>
                        <input type="text" class="form-control my-3" v-model="nuevaTarea" v-on:keyup.enter="agregarTarea">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Epocas</label>
                        <input type="text" class="form-control my-3" v-model="nuevaTarea" v-on:keyup.enter="agregarTarea">
                      </div>
                    </div>

              </div>
            </div> --}}

          {{-- <div class="pl-lg-4">
            <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Volumen de produccion por años</label>
                      <input type="text" class="form-control my-3" v-model="nuevaTarea" v-on:keyup.enter="agregarTarea">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Unidad de referencia (UR)</label>
                      <input type="text" class="form-control my-3" v-model="nuevaTarea" v-on:keyup.enter="agregarTarea">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Equivalencia UR (Kilos) (Calculo de la PC)</label>
                      <input type="text" class="form-control my-3" v-model="nuevaTarea" v-on:keyup.enter="agregarTarea">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Cantidad destinada a otros fines (semilla, perdidas) (UR)</label>
                      <input type="text" class="form-control my-3" v-model="nuevaTarea" v-on:keyup.enter="agregarTarea">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Cantidad vendida al mercado (UR)</label>
                      <input type="text" class="form-control my-3" v-model="nuevaTarea" v-on:keyup.enter="agregarTarea">
                    </div>
                  </div>

            </div>
          </div> --}}
          {{-- <button class="btn-primary" @click="agregarTarea">Agregar</button>
          <div class="mt-3" v-for="(item, index) of tareas">
            <div role="alert" :class="['alert', item.estado ? 'alert-success' : 'alert-danger']">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  {{index}} - {{item.nombre}} - {{item.estado}}
                </div>
                <div>
                  <button class="btn btn-success btn-sm" @click="editarTarea(index)">OK</button>
                  <button class="btn btn-danger btn-sm" @click="eliminar(index)">X</button>
                </div>
              </div>
            </div>
          </div> --}}
            <producto></producto>
          </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
{{-- <div class="main-content">
  <div class="header bg-gradient-success pb-2 pt-5 pt-md-2">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row">
        <div class="col">
        <div class="card shadow bg-default">

          <div class="card-body">

              <hr class="my-4"/>
              <h6 class="heading-small text-muted mb-4">¿Que porcentaje de los productos se vende o entrega?</h6>
              <div class="mt-5" id="app2">
              <div class="pl-lg-4">
              <div class="row">



                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Producto</label>
                        <input type="text" class="form-control my-3" v-model="nuevaTarea2" v-on:keyup.enter="agregarTarea2">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Finca (Rescatista)</label>
                        <input type="text" class="form-control my-3" v-model="nuevaTarea2" v-on:keyup.enter="agregarTarea2">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Centro acopio comprador</label>
                        <input type="text" class="form-control my-3" v-model="nuevaTarea2" v-on:keyup.enter="agregarTarea2">
                      </div>
                    </div>
                    <div class="col-lg-1">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Ferias</label>
                        <input type="text" class="form-control my-3" v-model="nuevaTarea2" v-on:keyup.enter="agregarTarea2">
                      </div>
                    </div>
                    <div class="col-lg-1">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Mercados</label>
                        <input type="text" class="form-control my-3" v-model="nuevaTarea2" v-on:keyup.enter="agregarTarea2">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Tiendas</label>
                        <input type="text" class="form-control my-3" v-model="nuevaTarea2" v-on:keyup.enter="agregarTarea2">
                      </div>
                    </div>
                    <div class="col-lg-1">
                      <div class="form-group">
                        <label class="form-control-label text-muted">Otro</label>
                        <input type="text" class="form-control my-3" v-model="nuevaTarea2" v-on:keyup.enter="agregarTarea2">
                      </div>
                    </div>
              </div>
            </div>


          <button class="btn-primary" @click="agregarTarea2">Agregar</button>
          <div class="mt-3" v-for="(item, index) of tareas2">
            <div role="alert" :class="['alert', item.estado ? 'alert-success' : 'alert-danger']">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  {{index}} - {{item.nombre2}} - {{item.estado2}}
                </div>
                <div>
                  <button class="btn btn-success btn-sm" @click="editarTarea2(index)">OK</button>
                  <button class="btn btn-danger btn-sm" @click="eliminar2(index)">X</button>
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>
      </div>
      </div>
  </div>
</div>
</div> --}}
{{-- <div class="main-content">
<div class="header bg-gradient-success pb-2 pt-5 pt-md-2">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row">
      <div class="col">
      <div class="card shadow bg-default">

        <div class="card-body">

            <hr class="my-4"/>
            <h6 class="heading-small text-muted mb-4">Su origen de produccion o servicios que brinda su organizacion es:</h6>

            <div class="pl-lg-4">
            <div class="row">



                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>
                      <input type="checkbox" id="cbox1" value="first_checkbox"> Tradicional
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>
                      <input type="checkbox" id="cbox1" value="first_checkbox"> Convencional
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>
                      <input type="checkbox" id="cbox1" value="first_checkbox"> Agroindustrial
                      </label>
                    </div>
                  </div>

              </div>
            </div>
            <div class="pl-lg-4">
              <div class="row">

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>
                      <input type="checkbox" id="cbox1" value="first_checkbox"> Tradicional en transicion
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>
                      <input type="checkbox" id="cbox1" value="first_checkbox"> Ecologico
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">

                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
</div>
</div>
</div> --}}

@endsection --}}
