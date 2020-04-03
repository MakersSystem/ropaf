@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Beneficios'),
        'description' => __('
En esta seccion se pueden crear nuevos Usuarios para cada una de las Asociaciones, asi mismo se puede administrar cada perfil de cada Usuario'),
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--7">
  <div class="header-body">
    <!-- Card stats -->
    <div class="row">
      <div class="col">
        <div class="card shadow" style="background-color: #003508;">

          <div class="card-body">
            <form method="POST" action="/benelid">
              {{ csrf_field() }}
              <h1 class="heading-large text-muted mb-4">Alguno de sus socios/as cumplen funciones o son lideres </h1>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label text-muted">
                      <input name="func_lid" type="checkbox" id="cbox1" value="El gobierno minicipal"> El gobierno minicipal
                      </label><br>
                      <label class="form-control-label text-muted" for="cbox2">
                      <input name="func_lid" type="checkbox" id="cbox2" value="rganizaciones similares"> Organizaciones similares
                      </label><br>
                      <label class="form-control-label text-muted" for="cbox3">
                      <input name="func_lid" type="checkbox" id="cbox3" value="ONG o fundaciones"> ONG o fundaciones
                      </label><br>
                      <label class="form-control-label text-muted" for="cbox4">
                      <input name="func_lid" type="checkbox" id="cbox4" value="obierno departamental/nacional"> Gobierno departamental/nacional
                      </label><br>
                      <label class="form-control-label text-muted" for="cbox5">
                      <input name="func_lid" type="checkbox" id="cbox5" value="Lideres de organizaciones"> Lideres de organizaciones
                      </label><br>
                      <label class="form-control-label text-muted" for="cbox6">
                      <input name="func_lid" type="checkbox" id="cbox6" value="Otro"> Otro
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <hr class="my-4" />
              <!-- Description -->
              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
