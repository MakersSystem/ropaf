<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.standalone.min.css">
  <link rel="stylesheet" href="now-ui-kit.css" type="text/css">
  <link rel="stylesheet" href="{{ asset('home') }}/css/nucleo-icons.css" type="text/css">
  <script src="{{ asset('home') }}/js/navbar-ontop.js"></script>
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>R.O.P.A.F.</title>
  <meta name="description" content="Start your development with a beautiful Bootstrap 4 UI kit. It is yours Free.">
  <meta name="keywords" content="bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, now ui, now ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit">

  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('dash') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="{{ asset('dash') }}/vendor/fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('dash') }}/css/argon.css?v=1.0.0" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>



    <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3PKUqa9oXq9Piatw3EDfUSGclM3PrREs&callback=initMap" type="text/javascript"></script>

        <style media="screen">
          #map{
            position: absolute;
            top: 0;
            right: 330px;
            left: 3px;
            bottom: 0;
          }
        </style>
        <style media="screen">
        .map-responsive{
          overflow:hidden;
          padding-bottom:56.25%;
          position:relative;
          height:1000%;
        }
        .map-responsive mp{
          left:0;
          top:0;
          height:250px;
          width:1000px;
          position:absolute;
        }
        </style>

    <style media="screen">
      #mapa { height: 500px; }
    </style>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
    @yield('styles')
</head>

<body class="">
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand m-0 p-0" data-placement="bottom" data-toggle="tooltip" href="#"><img class="mb-0" src="{{asset('home')}}/img/ropaf.png" width="80"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNowUIKitFree">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbarNowUIKitFree">
        <ul class="navbar-nav">
          <li class="nav-item mx-1 align-items-center d-flex justify-content-center">
            <a class="nav-link" href="#download">
              <i class="now-ui-icons business_bank x2 mr-2"></i>&nbsp;INICIO</a>
          </li>
          <li class="nav-item mx-1 align-items-center d-flex justify-content-center">
            <a class="nav-link" href="#">
              <i class="now-ui-icons files_paper x2 mr-2"></i>NOSOTROS</a>
          </li>
        </ul>
        <a class="btn btn-light text-primary" href="#pro">
          <i class="now-ui-icons gestures_tap-01 mr-1"></i>ROPAF</a>
        <ul class="navbar-nav flex-row justify-content-center mt-2 mt-md-0">
          <li class="nav-item mx-1">
            <a class="nav-link" href="#" data-placement="bottom" data-toggle="tooltip" title="Twitter">
              <img src="{{asset('home')}}/img/twitter_icon.png" height="30" alt="">
            </a>
          </li>
          <li class="nav-item mx-3 mx-md-1">
            <a class="nav-link" href="#" data-placement="bottom" data-toggle="tooltip" title="Facebook">
              <img src="{{asset('home')}}/img/facebook_icon.png" height="30" alt="">
            </a>
          </li>
          <li class="nav-item ml-1">
            <a class="nav-link" href="#" data-placement="bottom" data-toggle="tooltip" title="YouTube">
              <img src="{{asset('home')}}/img/youtube_icon.png" height="30" alt="">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center parallax cover gradient-overlay" style="background-image: url(&quot;./home/img/inicio.jpeg&quot;);position:relative;background-position:center center;background-size:cover;">
    <div class="container d-flex flex-column">      
      <div class="row my-auto">

        <div class="card col-md-4 mx-5 bg-primary">
          <div class="row mt-5">
            <div class="col-md-12">
              <h5 class="mb-4">
                <b>INICIAR SESION</b>
              </h5>
              
            </div>
          </div>
          <div class="row mt-4 pt-2">
            <div class="col">
              @if(\Session::has('message'))
              <p class="alert alert-info">
                  {{ \Session::get('message') }}
              </p>
              @endif
              <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group mb-3 mx-3">
                  <div class="input-group border-0">
                    <div class="input-group-prepend ">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="now-ui-icons ui-1_email-85 lg"></i>
                      </span>
                    </div>
                    <input id="inlineFormInputGroup" name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus placeholder="Correo Electronico" value="{{ old('email', null) }}"> 
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                  </div>
                </div>
                <div class="form-group mb-2 mx-3">
                  <div class="input-group border-0">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="now-ui-icons objects_key-25 lg"></i>
                      </span>
                    </div>
                    <input id="inlineFormInputGroup" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="Contraseña"> </div>
                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn mt-4 mb-3 btn-light rounded btn-lg text-primary">Iniciar Sesion</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6 text-white">
          <a href="#"><img class="mb-5" src="{{asset('home')}}/img/ropaf.png" height="150"></a>          
          <h1 class="mb-3 display-1">R.O.P.A.F.</h1>
          <h3 class="mb-5">Red de Organizaciones de Productores Agricolas y Forestales</h3>
        </div>        
      </div>
      <div class="row py-3">
        <div class="col-md-12">
          <h6 class="text-muted mb-5">
            <b>La Paz
              <a href="#">
                -
              <a href="#">
                </a>Bolivia
               </b>
          </h6>
        </div>
      </div>
    </div>
  </div>

  <div class="section-overlapping">
    <div class="container">
      <div class="py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="card mb-4" style="background-color: #E4FFE1;">
                <div class="row ml-3 mt-2">
                  <img class="mr-2" src="{{asset('home')}}/img/aopeb.png" height="50">
                  <h4 class="text-right mr-3 mt--5"><b class="text-dark">AOPEB</b></h4>
                </div>
                <a href="{{url('aopeb')}}" class="btn btn-primary btn-sm mx-5 mb-2">
                  <i class="now-ui-icons design_bullet-list-67"></i>&nbsp;Ingresar</a>
              </div>
            </div>
            <div class="col-md-3">                
              <div class="card mb-4" style="background-color: #FFE1E1;">                
                <div class="row ml-3 mt-2">
                  <a href="#"><img class="mr-2" src="{{asset('home')}}/img/anproca.png" height="50"></a>
                  <h4 class="text-right mr-3 mt--5"><b class="text-dark">ANPROCA</b></h4>
                </div>
                <a href="{{url('anproca')}}" class="btn btn-danger btn-sm mx-5 mb-2">
                  <i class="now-ui-icons design_bullet-list-67"></i>&nbsp;Ingresar</a>
              </div>
            </div>
            <div class="col-md-3">                
              <div class="mb-4 card border-0" style="background-color: #ECECEB">                   
                <div class="row ml-3 mt-2">
                  <a href="#"><img class="mr-2" src="{{asset('home')}}/img/cioec.gif" height="50"></a>
                  <h4 class="text-right mr-3 mt--5"><b class="text-dark">CIOEC</b></h4>
                </div>
                <a href="{{url('cioec')}}" class="btn btn-dark btn-sm mx-5 mb-2">
                  <i class="now-ui-icons design_bullet-list-67"></i>&nbsp;Ingresar</a>
              </div>
            </div>
            <div class="col-md-3">                
              <div class="mb-4 card border-0" style="background-color: #FFF5E1">                   
                <div class="row ml-3 mt-2">
                  <a href="#"><img class="mr-2" src="{{asset('home')}}/img/copracao.png" height="50"></a>
                  <h4 class="text-right mr-3 mt--5"><b class="text-dark">COPRACAO</b></h4>
                </div>
                <a href="{{route('copracao')}}" class="btn btn-warning btn-sm mx-5 mb-2">
                  <i class="now-ui-icons design_bullet-list-67"></i>&nbsp;Ingresar</a>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>

  <div class="section-overlapping bg-dark mt-5">
    <div class="container"><h1 class="text-center"><b>R.O.P.A.F.</b></h1></div>
    <div class="container">
      <div class="row">
        <div class="py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-4 bg-gray">
                  <h3 class="d-flex justify-content-center mt-3"><b class="text-dark">Objetivo</b></h3>
                  <p class="mx-3 text-justify">Fortalecer y aglutinar a las diferentes organizaciones a nivel nacional del Estado Plurinacional de Bolivia, comunicando , coordinando y capacitando para incentivar la agricultura familiar con el proposito del vivir bien.</p>
                </div>
              </div>
              <div class="col-md-4">

                
                <div class="card mb-4 bg-gray">
                
                  <h3 class="d-flex justify-content-center mt-3"><b class="text-dark">Mision</b></h3>
                  <p class="mx-3 text-justify">Somos una Red de productores agrícolas forestales líder del sector agrícola ecológico forestal, que busca satisfacer las principales necesidades de las organizaciones de base y las familias de productores afiliadas, a través del desarrollo integral y oportuno de productos y servicios, con equidad, ética, transparencia, eficacia, eficiencia, y reciprocidad bajo la filosofía del desarrollo sostenible y cuidado del medio ambiente, posicionado en el contexto nacional e internacional.</p>
                </div>
              </div>
              <div class="col-md-4">
                

                <div class="mb-4 card bg-gray">
                   
                  <h3 class="d-flex justify-content-center mt-3"><b class="text-dark">Vision</b></h3>
                  <p class="mx-3 text-justify">ROPAF es una red de organizaciones de productores forestales, sólida y competitiva con emprendimientos a nivel nacional en constante crecimiento para darle a nuestra producción primaria el mayor valor agregado y promoviendo servicios integrales para el desarrollo de las organizaciones afiliadas de base, con criterios propositivos de equidad y sostenibilidad económica, social y medio ambiental.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  
  <div class="py-5 bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7650.866092047707!2d-68.13113996735055!3d-16.504221337592003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2065711bba9f%3A0xcc2fca99ed7fcf5a!2sVillaSalome%20PUC!5e0!3m2!1ses-419!2sbo!4v1583297535514!5m2!1ses-419!2sbo" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>        
      </div>
    </div>
  </div>
  
  
  
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-xl-8 col-md-10">
          <h2 class="my-3 text-center">
            <b>Mas...</b>
          </h2>
          <p class="lead text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque ut autem rerum, quae voluptatem porro nulla! Odit, quas optio maxime necessitatibus vitae culpa! Alias tenetur odio facilis doloremque ipsum! </p>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <div class="container">
      <div class="row my-5 py-5">
        <div class="col-md-3 text-center">
          <i class="now-ui-icons education_paper"></i>
          <a class="ml-3 btn btn-outline-primary my-4 rounded" href="#">Biblioteca</a>
        </div>
        <div class="col-md-3 text-center">
          <i class="now-ui-icons media-1_button-play"></i>
          <a class="ml-3 btn btn-outline-primary my-4 rounded" href="#">Videos</a>
        </div>
        <div class="col-md-3 text-center">
          <i class="now-ui-icons files_single-copy-04"></i>
          <a class="ml-3 btn btn-outline-primary my-4 rounded" href="#">Convocatorias</a>
        </div>
        <div class="col-md-3 text-center">
          <i class="now-ui-icons media-1_album"></i>
          <a class="ml-3 btn btn-outline-primary my-4 rounded" href="#">Reglamentos</a>
        </div>
      </div>
    </div>
  </div>
    
  <div class="pt-5 bg-dark">
    <div class="container">
      <div class="row py-2 d-flex justify-content-center" id="pro">
        <div class="col-md-3 bg-dark">
          <h3><b>Telefono</b><i class="m-3 now-ui-icons tech_mobile"></i>&nbsp;</h3>
          <h5 class="text-center">77709789</h5>
        </div>
        <div class="card">'</div>
        <div class="col-md-3 bg-dark">
          <h3><b>Correo</b><i class="m-3 now-ui-icons ui-1_email-85"></i>&nbsp;</h3>
          <h5 class="text-center">ropaf@aopeb.org</h5>
        </div>
        <div class="card">'</div>
        <div class="col-md-3 bg-dark">
          <h3><b>Direccion</b><i class="m-3 now-ui-icons education_agenda-bookmark"></i>&nbsp;</h3>
          <h5 class="text-center">Av. Landaeta #54</h5>
        </div>
      </div>
      <div class="row mt-4 py-5">
        <div class="col-md-12 text-center">
          <h3 class="mb-5 text-center">Siguenos en Nuestras Redes Sociales</h3>
          <button class="btn btn-icon rounded btn-lg btn-light mx-1 btn-twitter" type="button" data-placement="top" data-toggle="tooltip" title="Follow us">
            <img src="{{asset('home')}}/img/twitter_icon.png" height="30" alt="">
          </button>
          <button class="btn btn-icon rounded btn-lg btn-light mx-1 btn-facebook" type="button" data-placement="top" data-toggle="tooltip" title="Like us">
            <img src="{{asset('home')}}/img/facebook_icon.png" height="30" alt="">
          </button>
          <button class="btn btn-icon rounded btn-lg btn-light mx-1 btn-linkedin" type="button" data-placement="top" data-toggle="tooltip" title="Follow us">
            <img src="{{asset('home')}}/img/youtube_icon.png" height="30" alt="">
          </button>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 col-sm-6 text-left ">
          <ul class="list-inline text-muted d-flex justify-content-center justify-content-md-start mb-4">
            <li class="list-inline-item mx-2">
              <a href="#" class="text-light" target="_blank">
                <small>MAKER SYSTEM</small>
              </a>
            </li>
            <li class="list-inline-item mx-2">
              <a href="#" class="text-light" target="_blank">
                <small>NOSOTROS</small>
              </a>
            </li>
            <li class="list-inline-item mx-2">
              <a href="#" class="text-light" target="_blank">
                <small>BLOG</small>
              </a>
            </li>
            <li class="list-inline-item mx-2">
              <a href="#" class="text-light" target="_blank">
                <small>LICENSE</small>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 pr-0 text-right d-flex justify-content-center justify-content-md-end">
          <li class="list-inline-item text-light mb-4">
            <small> © 2020, Designed by
              <a href="#" target="_blank" class="text-white">Software</a>. Coded by
              <a href="#" target="_blank" class="text-white">MakerSystem</a> &
              <a href="#" target="_blank" class="text-white">Ropaf</a>. </small>
          </li>
        </div>
        <div> </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header pb-0">
          <h4 class="modal-title text-dark mx-auto">
            <b>MODAL TITLE</b>
          </h4>
          <button type="button" class="close text-danger pt-4 ml-0" data-dismiss="modal">
            <span>
              <i class="now-ui-icons ui-1_simple-remove lg"></i>
            </span>
          </button>
        </div>
        <div class="modal-body">
          <p class="m-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden
            flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        </div>
        <div class="modal-footer d-flex flex-row justify-content-between">
          <button type="button" class="btn btn-secondary">Nice Button</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal2">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content text-center bg-primary">
        <div class="modal-body">
          <button class="btn btn-light btn-lg btn-icon rounded shadow" type="button">
            <i class="now-ui-icons users_circle-08 text-primary x2"></i>
          </button>
          <p class="m-4"> Always have an access to your profile </p>
          <button type="button" class="btn btn-primary mr-3">BACK</button>
          <button type="button" class="btn btn-primary ml-3" data-dismiss="modal"> CLOSE </button>
        </div>
      </div>
    </div>
  </div>

  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="{{asset('home')}}/js/parallax.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
  <script>
    $(document).ready(function(){
            $('[data-toggle="popover"]').popover();   
            $('[data-toggle="tooltip"]').tooltip();
            $('#datepicker-example').datepicker({
                calendarWeeks: true,
                autoclose: true,
                todayHighlight: true
            });
          });
  </script>

</body>
</html>
