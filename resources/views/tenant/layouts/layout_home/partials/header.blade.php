  <!-- Main Header -->
  <header class="main-header dark-bg">
      <div class="navbar-wrapper">
          <div class="container-fluid">
              <nav class="navbar navbar-fixed-top">
                  <div class="container">
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                              data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="#">Logo</a>
                      </div>
                      <div id="navbar" class="navbar-collapse collapse">
                          <ul class="nav navbar-nav pull-right">
                              <li class="nav_li" ><a class="asd" href="#">NOTIFICACIONES</a></li>
                              <li class="nav_li {{ Route::is('tenant.branches.index') ? 'active' : '' }}"><a href="{{ route('tenant.branches.index') }}"
                                      class="asd">SELECCIONAR EMPRESA</a></li>
                              <li class="nav_li {{ Route::is('tenant.companies.index') ? 'active' : '' }}"><a class="asd" href="{{ route('tenant.companies.index') }}">EMPRESAS Y LOCALES</a></li>
                              <li  class="nav_li {{ Route::is('tenant.users.index') ? 'active' : '' }} "><a class="asd" href="{{ route('tenant.users.index') }}">USUARIOS</a></li>

                              <!-- Authentication -->
                              <li class="dropdown"><a href="#" class="dropdown-toggle active"
                                      data-toggle="dropdown" role="button" aria-haspopup="true"
                                      aria-expanded="false"><img src="https://app.nubefa.com/assets/images/media-user.png" class="img-responsive img-rounded dropdown__img" alt="" srcset=""><span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                      <li><a href="#">Ajustar Perfil</a></li>
                                      <li>
                                          <form method="POST" action="{{ route('tenant.logout') }}">
                                              @csrf
                                              <a :href="route('tenant.logout')"
                                                  onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                                                  {{ __('Salir') }}
                                              </a>
                                          </form>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </div>
  </header>
