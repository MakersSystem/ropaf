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
            <form method="POST" action="/daorgani" enctype="multipart/form-data">
              {{ csrf_field() }}
              <h1 class="heading-large text-muted mb-4">Datos organizacionales </h1>
              <div class="pl-lg-3">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Fecha Fundacion</label>
                      <input name="fech_funda" type="date" id="input-username" class="form-control shadow">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-email">Año de afilicaion AOPEB</label>
                      <input name="anio_afili" type="number" id="input-email" class="form-control shadow">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Personeria juridica</label>
                      <div class="mb-4">
                        <!-- <input class="form-control" placeholder="Nombre" type="text"> -->
                        <select name="perso_juri" class="form-control">
                          <option value="NO">NO</option>
                          <option value="SI">SI</option>                         
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <label class="form-control-label text-muted">Organigrama (Adjuntar)</label>
                    <div class="form-group">
                      <div class="input-group">                      
                        <input type="text" class="form-control upl"  id="upload" readonly>
                        <div class="input-group-btn">       
                          <span class="fileUpload ni ni-cloud-upload-96 btn btn-outline-success"> Subir
                            <input type="file" name="organi" class="upload up" id="up" onchange="readURL(this);">
                          </span>                          
                        </div>
                      </div>
                    </div>                   
                  </div>

                  <div class="col-lg-4">
                    <label class="form-control-label text-muted" for="input-last-name">Estaturo y reglamento interno</label>                    
                    <div class="form-group">                      
                      <div class="input-group">                      
                        <input type="text" class="form-control" readonly>
                        <div class="input-group-btn">       
                          <span class="fileUpload ni ni-cloud-upload-96 btn btn-outline-success"> Subir
                            <span class="upl" id="upload"></span>
                            <input type="file" name="esta_regl" class="upload up" id="up" onchange="readURL(this);" >
                          </span>                          
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Manual de funciones</label>
                      <div class="mb-4">                        
                        <select name="manu_func" class="form-control">
                          <option value="NO">NO</option>
                          <option value="SI">SI</option>                        
                       </select>
                      </div>

                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">NIT</label>
                      <div class="form-group">
                        <div class="input-group">                      
                          <input type="text" class="form-control upl"  id="upload" readonly>
                          <div class="input-group-btn">       
                            <span class="fileUpload ni ni-cloud-upload-96 btn btn-outline-success"> Subir                              
                              <input type="file" name="nit" class="upload up" id="up" onchange="readURL(this);" >
                            </span>                          
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">RAU</label>
                      <div class="mb-4">                        
                        <select name="rau" class="form-control">
                          <option value="NO">NO</option>
                         <option value="SI">SI</option>                         
                       </select>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-first-name">Funda empresas (adjuntar)</label>
                      <div class="form-group">
                        <div class="input-group">                      
                          <input type="text" class="form-control upl"  id="upload" readonly>
                          <div class="input-group-btn">       
                            <span class="fileUpload ni ni-cloud-upload-96 btn btn-outline-success"> Subir
                              <input type="file" name="fund_empr" class="upload up" id="up" onchange="readURL(this);" >
                            </span>                          
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Targeta empresarial</label>
                      <div class="mb-4">                        
                        <select name="targ_empr" class="form-control">
                          <option value="NO">NO</option>
                         <option value="SI">SI</option>                         
                       </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted" for="input-last-name">Registro sanitario</label>
                      <div class="mb-4">                        
                        <select name="regi_sani" class="form-control">
                          <option value="NO">NO</option>
                          <option value="SI">SI</option>                         
                       </select>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="row">

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Sello SPG</label>                      
                     <select name="sello_spg" class="form-control">
                      <option value="NO">NO</option>
                      <option value="SI">SI</option>                      
                    </select>
                    </div>
                  </div>

                </div>
                <div id="app">
                  <sello></sello>
                </div>
              </div>

              <hr class="my-4" />
              <div class="row">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ url('daorgani') }}" class="btn btn-info">Cancelar</a>              
              </div>
              
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
