@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Produccion Ecologica'),
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
            <form method="POST" action="{{ url('/proeco/'.$produ_eco->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              <h1 class="heading-large text-muted mb-4">Produccion Ecologica </h1>
              <div class="pl-lg-4">

                <h6 class="heading-small text-muted">¿Que porcentaje/area promedio de su tierra produce el socio/a en forma ecologica?</h6>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <input class="form-control form-control-alternative" name="pro_soc" type="number" placeholder="Porcentaje" value="{{ $produ_eco->pro_soc }}">
                    </div>
                  </div>
                  <label for=""><h2 class="text-muted pt-2"><b>%</b></h2> </label>
                </div>

                <hr class="my-3" />
              <h6 class="heading-small text-muted">¿Que porcentaje de socios tiene algun tipo de certidicacion ecologica?</h6>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <input class="form-control form-control-alternative" name="cer_soc" type="number" placeholder="Porcentaje" value="{{ $produ_eco->cer_soc }}">
                    </div>
                  </div>
                  <label for=""><h2 class="text-muted pt-2"><b>%</b></h2> </label>
                </div>

                <hr class="my-3" />
                <h6 class="heading-small text-muted">¿Que area o superficie promedio por socio/a esta certificada? Detallar</h6>
                <div class="row">
                  <div class="col-lg-8">
                    <div class="form-group">
                      <!-- <input class="form-control form-control-alternative" name="sup_soc" type="text" placeholder="Escribir"> -->
                      <textarea class="form-control form-control-alternative" name="sup_soc" rows="5" cols="80" placeholder="escribir">{{ $produ_eco->sup_soc }}</textarea>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Adjuntar archivo</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Nombre" type="text"> --}}
                        <input type="file" name="adju" class="form-control" value="{{ $produ_eco->adju }}">

                      </div>
                    </div>
                  </div>
                </div>

                <hr class="my-4" />
              </div>
              <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
