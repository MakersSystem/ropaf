<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-dark bg-dark" id="sidenav-main">
    <div class="container-fluid">


        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->

            <!-- Form -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="pl-5" href="">
                <img src="{{ asset('argon') }}/img/brand/blue.png" height="100"  alt="...">
            </a>

            <!-- Navigation -->
            <ul class="navbar-nav">
                @can('users_manage')
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('principal') || request()->is('principal') ? 'active bg-muted' : '' }}" href="{{ url("principal") }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Inicio') }}
                    </a>
                </li>
                @endcan
                @can('users')
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/home') || request()->is('admin/home/*') ? 'active bg-muted' : '' }}" href="{{ route("admin.home") }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Inicio') }}
                    </a>
                </li>
                @endcan


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
                          <i class="ni ni-chart-bar-32" style="color: #F7971C;"></i> {{ __('Cultivos Anuales Cortos') }}
                      </a>
                  </li>

            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-primary">Documentación</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="ni ni-spaceship"></i> Mas...
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="ni ni-palette"></i> Equipo
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="ni ni-ui-04"></i> Acerca de AOPEB
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
