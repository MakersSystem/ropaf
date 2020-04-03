@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Editar Datos Organizacionales'),
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
            <form method="POST" action="{{ url('/daorgani/'.$organizacionales->id_user) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              <h1 class="heading-large text-muted mb-4">Datos organizacionales </h1>
              <div class="pl-lg-3">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Fecha Fundacion</label>
                      <input value="{{ $organizacionales->fech_funda }}" name="fech_funda" type="date" id="input-username" class="form-control form-control-alternative">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-email">Año de afilicaion AOPEB</label>
                      <input value="{{ $organizacionales->anio_afili }}" name="anio_afili" type="number" id="input-email" class="form-control form-control-alternative">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Personeria juridica</label>
                      <div class="input-group input-group-alternative mb-4">
                        <!-- <input class="form-control" placeholder="Nombre" type="text"> -->
                        <select name="perso_juri" class="form-control">
                          @if($organizacionales->perso_juri == 'SI')
                            <option value="NO">NO</option>
                            <option value="SI" selected="selected">SI</option>
                          @else
                            <option value="NO" selected="selected">NO</option>
                            <option value="SI">SI</option>
                          @endif                
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Organigrama (adjuntar)</label>
                      <div class="input-group input-group-alternative mb-4">
                        <input type="file" name="organi" class="form-control" value="{{ $organizacionales->organi }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Estaturo y reglamento interno</label>
                      <div class="input-group input-group-alternative mb-4">
                        <!-- <input class="form-control" placeholder="Correo Electronico" type="text"> -->
                        <input type="file" name="esta_regl" class="form-control" value="{{ $organizacionales->esta_regl }}">
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Manual de funciones</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Nombre" type="text"> --}}
                        <select name="manu_func" class="form-control">
                          @if($organizacionales->manu_func == 'si')
                            <option value="NO">NO</option>
                            <option value="SI" selected="selected">SI</option>
                          @else
                            <option value="NO" selected="selected">NO</option>
                            <option value="SI">SI</option>
                          @endif
                         {{-- <option selected value="{{ $organizacionales->manu_func }}">{{ $organizacionales->manu_func }}</option>
                         <option value="si">SI</option>
                         <option value="no">NO</option> --}}
                       </select>
                      </div>

                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">NIT</label>
                      <div class="input-group input-group-alternative mb-4">
                        <input type="file" name="nit" class="form-control" value="{{ $organizacionales->nit }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">RAU</label>
                      <div class="input-group input-group-alternative mb-4">
                        <select name="rau" class="form-control">
                          @if($organizacionales->rau == 'si')
                            <option value="NO">NO</option>
                            <option value="SI" selected="selected">SI</option>
                          @else
                            <option value="NO" selected="selected">NO</option>
                            <option value="SI">SI</option>
                          @endif
                          {{-- <option selected value="{{ $organizacionales->rau }}">{{ $organizacionales->rau }}</option>
                          <option value="si">SI</option>
                          <option value="no">NO</option> --}}
                       </select>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Funda empresas (adjuntar)</label>
                      <div class="input-group input-group-alternative mb-4">
                        <input type="file" name="fund_empr" class="form-control" value="{{ $organizacionales->fund_empr }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Targeta empresarial</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Telefono o Celular" type="text"> --}}
                        <select name="targ_empr" class="form-control">
                          @if($organizacionales->targ_empr == 'si')
                            <option value="NO">NO</option>
                            <option value="SI" selected="selected">SI</option>
                          @else
                            <option value="NO" selected="selected">NO</option>
                            <option value="SI">SI</option>
                          @endif
                         {{-- <option selected value="{{ $organizacionales->targ_empr }}">{{ $organizacionales->targ_empr }}</option>
                         <option value="si">SI</option>
                         <option value="no">NO</option> --}}
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Registro sanitario</label>
                      <div class="input-group input-group-alternative mb-4">
                        {{-- <input class="form-control" placeholder="Correo Electronico" type="text"> --}}
                        <select name="regi_sani" class="form-control">
                          @if($organizacionales->regi_sani == 'si')
                            <option value="NO">NO</option>
                            <option value="SI" selected="selected">SI</option>
                          @else
                            <option value="NO" selected="selected">NO</option>
                            <option value="SI">SI</option>
                          @endif
                          {{-- <option selected value="{{ $organizacionales->regi_sani }}">{{ $organizacionales->regi_sani }}</option>
                         <option value="si">SI</option>
                         <option value="no">NO</option> --}}
                       </select>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="row">

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Sello SPG</label>
                      {{-- <input name="sello_spg" type="text" id="input-username" class="form-control form-control-alternative"> --}}
                      <select name="sello_spg" class="form-control">
                        @if ($organizacionales->sello_spg == 'Agricultura Ecologia')}
                          <option value="Agricultura Ecologia" selected="selected">Agricultura Ecologia</option>
                        @else
                          <option value="Agricultura Ecologia">Agricultura Ecologia</option>
                        @endif
                        @if ($organizacionales->sello_spg == 'Usda Organic')}
                          <option value="Usda Organic" selected="selected">Usda Organica</option>
                        @else
                          <option value="Usda Organic">Usda Organic</option>
                        @endif
                        @if ($organizacionales->sello_spg == 'jas')}
                          <option value="jas" selected="selected">jas</option>
                        @else
                          <option value="jas">jas</option>
                        @endif
                        @if ($organizacionales->sello_spg == 'jas')}
                          <option value="jas" selected="selected">fair trade</option>
                        @else
                          <option value="fair trade">fair trade</option>
                        @endif
                        {{-- <option selected value="{{ $organizacionales->sello_spg }}">{{ $organizacionales->sello_spg }}</option> --}}




                     </select>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-email">Certificacion</label>
                      {{-- <input name="certi_orga" type="text" id="input-email" class="form-control form-control-alternative"> --}}
                      <select name="certi_orga" class="form-control">
                        <option selected value="{{ $organizacionales->certi_orga }}">{{ $organizacionales->certi_orga }}</option>
                       <option value="Agricultura Ecologia">Organica</option>
                       <option value="Usda Organic">Transicion</option>
                       <option value="Ecologia">Ecologica</option>
                       <option value="fair trade">Convencional</option>
                     </select>
                    </div>
                  </div>
                </div>

              </div>

              <hr class="my-4" />
              <!-- Description -->
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer" style="background-color: #F2FCF3;">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6">
        <div class="copyright text-center text-xl-left text-muted">
          &copy; {{ now()->year }} <a href="" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
        </div>
      </div>
      <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                <li class="nav-item">
                    <a href="#" class="nav-link" target="_blank">Equipo Creativo</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" target="_blank">Division TIC</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" target="_blank">Acerca De</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" target="_blank">AOPEB</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" target="_blank">Licencia </a>
                </li>
            </ul>
      </div>
    </div>
  </footer>
</div>
@endsection
