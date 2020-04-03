<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AOPEB</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Favicon -->
    <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    @yield('styles')
</head>

<body class="app pace-done" style="background-color: #F2FCF3;">

  {{-- @auth()
      <form id="logout-form" action="" method="POST" style="display: none;">
          @csrf
      </form>
      @include('layouts.navbars.sidebar')
  @endauth --}}


  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Cerrar Sesion') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
  </ul>



    <div class="app-body">
      <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
          <div class="container-fluid">
              <!-- Toggler -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <!-- Brand -->
              <a class="pl-5" href="">
                  <img src="{{ asset('argon') }}/img/brand/blue.png" height="100"  alt="...">
              </a>
              <!-- User -->
              <ul class="nav align-items-center d-md-none">
                  <li class="nav-item dropdown">
                      <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <div class="media align-items-center">
                              <span class="avatar avatar-sm rounded-circle">
                              <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                              </span>
                          </div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                          <div class=" dropdown-header noti-title">
                              <h6 class="text-overflow m-0">{{ __('Bienvenido!') }}</h6>
                          </div>
                          <a href="" class="dropdown-item">
                              <i class="ni ni-single-02"></i>
                              <span>{{ __('Mi Perfil') }}</span>
                          </a>
                          <a href="#" class="dropdown-item">
                              <i class="ni ni-settings-gear-65"></i>
                              <span>{{ __('Configuracion') }}</span>
                          </a>
                          <a href="#" class="dropdown-item">
                              <i class="ni ni-calendar-grid-58"></i>
                              <span>{{ __('Actividades') }}</span>
                          </a>
                          <a href="#" class="dropdown-item">
                              <i class="ni ni-support-16"></i>
                              <span>{{ __('Soporte') }}</span>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a href="" class="dropdown-item" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                              <i class="ni ni-user-run"></i>
                              <span>{{ __('Cerrar Sesion ') }}</span>
                          </a>
                      </div>
                  </li>
              </ul>
              <!-- Collapse -->
              <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                  <!-- Collapse header -->
                  <div class="navbar-collapse-header d-md-none">
                      <div class="row">
                          <div class="col-6 collapse-brand">
                              <a href="">
                                  <img src="{{ asset('argon') }}/img/brand/blue.png">
                              </a>
                          </div>
                          <div class="col-6 collapse-close">
                              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                  <span></span>
                                  <span></span>
                              </button>
                          </div>
                      </div>
                  </div>
                  <!-- Form -->
                  <form class="mt-4 mb-3 d-md-none">
                      <div class="input-group input-group-rounded input-group-merge">
                          <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                          <div class="input-group-prepend">
                              <div class="input-group-text">
                                  <span class="fa fa-search"></span>
                              </div>
                          </div>
                      </div>
                  </form>
                  <!-- Navigation -->
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route("admin.home") }}">
                              <i class="ni ni-tv-2 text-primary"></i> {{ __('Inicio') }}
                          </a>
                      </li>
                      @can('users_manage')
                      <li class="nav-item">
                          <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                              <i class="fab fa-laravel" style="color: #f4645f;"></i>
                              <span class="nav-link-text" style="color: #f4645f;">{{ __('Admin Usuarios') }}</span>
                          </a>

                          <div class="collapse show" id="navbar-examples">
                              <ul class="nav nav-sm flex-column">
                                  <li class="nav-item">
                                      <a class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}" href="{{ route("admin.permissions.index") }}">
                                          {{ __('Permisos') }}
                                      </a>
                                  </li>

                                  <li class="nav-item">
                                      <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                          {{ __('Roles') }}
                                      </a>
                                  </li>

                                  <li class="nav-item">
                                      <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                          {{ __('Usuarios') }}
                                      </a>
                                  </li>


                              </ul>
                          </div>
                      </li>
                      @endcan


                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('auth.change_password') }}">
                              <i class="ni ni-planet text-blue"></i> {{ __('Cambiar Contraseña') }}
                          </a>
                      </li>

                      @can('users')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('organizacion') }}">
                                <i class="ni ni-planet text-blue"></i> {{ __('Organizacion') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('representacion') }}">
                                <i class="ni ni-pin-3 text-orange"></i> {{ __('Representancion') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('daorgani') }}">
                                <i class="ni ni-key-25 text-info"></i> {{ __('Datos Organizacionales') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('daadmin') }}">
                                <i class="ni ni-circle-08 text-pink"></i> {{ __('Datos Administrativos') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('daprodu') }}">
                                <i class="ni ni-circle-08 text-pink"></i> {{ __('Datos Productivos') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('provendidos') }}">
                                <i class="ni ni-circle-08 text-pink"></i> {{ __('Productivos Vendidos') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('proeco') }}">
                                <i class="ni ni-circle-08 text-pink"></i> {{ __('Produccion Ecologica') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('daproduso') }}">
                                <i class="ni ni-circle-08 text-pink"></i> {{ __('Datos Productivos Promedios Socios') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('mercado') }}">
                                <i class="ni ni-circle-08 text-pink"></i> {{ __('Mercado') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('benelid') }}">
                                <i class="ni ni-circle-08 text-pink"></i> {{ __('Beneficio') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('beneficio') }}">
                                <i class="ni ni-circle-08 text-pink"></i> {{ __('Beneficio Sociales') }}
                            </a>
                        </li>
                      @endcan
                  </ul>
                  <!-- Divider -->
                  <hr class="my-3">
                  <!-- Heading -->
                  <h6 class="navbar-heading text-muted">Documentation</h6>
                  <!-- Navigation -->
                  <ul class="navbar-nav mb-md-3">
                      <li class="nav-item">
                          <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
                              <i class="ni ni-spaceship"></i> Getting started
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
                              <i class="ni ni-palette"></i> Foundation
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
                              <i class="ni ni-ui-04"></i> Components
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>





      <!--
      <div class="sidebar">
          <nav class="sidebar-nav">
              <ul class="nav">
                  <li class="nav-item">
                      <a href="{{ route("admin.home") }}" class="nav-link">
                          <i class="nav-icon fas fa-fw fa-tachometer-alt">
                          </i>
                          Inicio
                      </a>
                  </li>
                  @can('users_manage')
                      <li class="nav-item nav-dropdown">
                          <a class="nav-link  nav-dropdown-toggle" href="#">
                              <i class="fa-fw fas fa-users nav-icon">

                              </i>
                              Admin de Usuarios
                          </a>
                          <ul class="nav-dropdown-items">
                              <li class="nav-item">
                                  <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                      <i class="fa-fw fas fa-unlock-alt nav-icon">
                                      </i>
                                      Permisos
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                      <i class="fa-fw fas fa-briefcase nav-icon">
                                      </i>
                                      {{ trans('cruds.role.title') }}
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                      <i class="fa-fw fas fa-user nav-icon">

                                      </i>
                                      Usuarios
                                  </a>
                              </li>
                          </ul>
                      </li>
                  @endcan
                  <li class="nav-item">
                      <a href="{{ route('auth.change_password') }}" class="nav-link">
                          <i class="nav-icon fas fa-fw fa-key">

                          </i>
                          Cambiar Contraseña
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                          <i class="nav-icon fas fa-fw fa-sign-out-alt">

                          </i>
                          Cerrar Sesion
                      </a>
                  </li>
              </ul>

          </nav>
          <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>

      -->

        <div class="container-fluid main-content">

          <div class="main-content">
            <div id="app">
              @yield("content")
            </div>
          </div>
        </div>

        <!--
        <main class="main">
            <div style="padding-top: 20px" class="container-fluid">
                @if(session('message'))
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>

                        </div>
                    </div>
                @endif
                @if($errors->count() > 0)
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('content')

            </div>
        </main>
        -->

        {{-- <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form> --}}
    </div>
    @guest()
        @include('layouts.footers.guest')
    @endguest
    <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    @stack('js')

    <!-- Argon JS -->
    <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    <script src="{{ asset('argon') }}/js/calculo.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(function() {
  //let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
  //let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
  let excelButtonTrans = '{{ trans('Excel') }}'
  let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
  let printButtonTrans = '{{ trans('Imprimir') }}'
  //let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'

  let languages = {
    'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
  };

  $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
  $.extend(true, $.fn.dataTable.defaults, {
    language: {
      url: languages['{{ app()->getLocale() }}']
    },
    columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
    }, {
        orderable: false,
        searchable: false,
        targets: -1
    }],
    select: {
      style:    'multi+shift',
      selector: 'td:first-child'
    },
    order: [],
    scrollX: true,
    pageLength: 100,
    dom: 'lBfrtip<"actions">',
    buttons: [


      {
        extend: 'excel',
        className: 'btn-default',
        text: excelButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'pdf',
        className: 'btn-default',
        text: pdfButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'print',
        className: 'btn-default',
        text: printButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },

    ]
  });

  $.fn.dataTable.ext.classes.sPageButton = '';
});

    </script>
    @yield('scripts')
</body>

</html>
