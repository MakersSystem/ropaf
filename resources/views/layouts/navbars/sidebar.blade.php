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
                  <a class="nav-link text-dark" href="{{ route("admin.home") }}">
                      <i class="ni ni-tv-2 text-primary"></i> {{ __('Inicio') }}
                  </a>
              </li>
              @can('users_manage')
              <li class="nav-item">
                  <a class="nav-link active text-dark" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                      <i class="fab fa-laravel" style="color: #f4645f;"></i>
                      <span class="nav-link-text" style="color: #f4645f;">{{ __('Admin Usuarios') }}</span>
                  </a>

                  <div class="collapse show" id="navbar-examples">
                      <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                              <a class="nav-link text-dark {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active bg-muted' : '' }}" href="{{ route("admin.permissions.index") }}">
                                  {{ __('Permisos') }}
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="{{ route("admin.roles.index") }}" class="nav-link text-dark {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active bg-muted' : '' }}">
                                  {{ __('Roles') }}
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="{{ route("admin.users.index") }}" class="nav-link text-dark {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active bg-muted' : '' }}">
                                  {{ __('Usuarios') }}
                              </a>
                          </li>


                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-dark" href="{{ route('auth.change_password') }}">
                      <i class="ni ni-planet text-blue"></i> {{ __('Cambiar Contraseña') }}
                  </a>
              </li>
              @endcan




              @can('users')
                  <li class="nav-item">
                      <a class="nav-link {{ request()->is('organizacion') || request()->is('organizacion/*') ? 'active bg-muted' : '' }}" href="{{ url('organizacion') }}">
                          <i class="ni ni-pin-3 text-orange"></i> {{ __('Organizacion') }}
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->is('representacion') || request()->is('representacion/*') ? 'active bg-muted' : '' }}" href="{{ url('representacion') }}">
                          <i class="ni ni-basket text-orange"></i> {{ __('Representancion') }}
                      </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link {{ request()->is('daprodu') || request()->is('daprodu/*') ? 'active bg-muted' : '' }}" href="{{ url('daprodu') }}">
                          <i class="ni ni-chart-bar-32" style="color: #F7971C;"></i> {{ __('Datos Productivos') }}
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->is('provendidos') || request()->is('provendidos/*') ? 'active bg-muted' : '' }}" href="{{ url('provendidos') }}">
                          <i class="ni ni-cart" style="color: #4AF71C;"></i> {{ __('Productos Vendidos') }}
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->is('proeco') || request()->is('proeco/*') ? 'active bg-muted' : '' }}" href="{{ url('proeco') }}">
                          <i class="ni ni-world" style="color: #1C44F7;"></i> {{ __('Produccion Ecologica') }}
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->is('daproduso') || request()->is('daproduso/*') ? 'active bg-muted' : '' }}" href="{{ url('daproduso') }}">
                          <i class="ni ni-building" style="color: #BF1CF7;"></i> {{ __('Datos Productivos Promedios Socios') }}
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->is('mercado') || request()->is('mercado/*') ? 'active bg-muted' : '' }}" href="{{ url('mercado') }}">
                          <i class="ni ni-cart" style="color: #F71C9D;"></i> {{ __('Mercado') }}
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->is('beneficio') || request()->is('beneficio/*') ? 'active bg-muted' : '' }}" href="{{ url('beneficio') }}">
                          <i class="ni ni-archive-2" style="color: #BBF71C;"></i> {{ __('Beneficios') }}
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->is('economico') || request()->is('economico/*') ? 'active bg-muted' : '' }}" href="{{ url('economico') }}">
                          <i class="ni ni-money-coins" style="color: #1C44F7;"></i> {{ __('Economicos') }}
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->is('demanda') || request()->is('demanda/*') ? 'active bg-muted' : '' }}" href="{{ url('demanda') }}">
                          <i class="ni ni-briefcase-24" style="color: #BF1CF7;"></i> {{ __('Demandas Financieras y no Financieras') }}
                      </a>
                  </li>
              @endcan
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading text-muted">Documentacion</h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
              <li class="nav-item">
                  <a class="nav-link text-dark" href="">
                      <i class="ni ni-spaceship"></i> Mas...
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-dark" href="">
                      <i class="ni ni-palette"></i> Fundacion
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-dark" href="">
                      <i class="ni ni-ui-04"></i> Acerca de AOPEB
                  </a>
              </li>
          </ul>
      </div>
  </div>
</nav>
