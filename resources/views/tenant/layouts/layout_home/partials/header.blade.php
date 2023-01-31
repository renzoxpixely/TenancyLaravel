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
                          <ul class="nav navbar-nav">
                              <li><a href="#">NOTIFICACIONES</a></li>
                              <li class="active"><a href="{{ route('tenant.branches.index') }}" class="">SELECCIONAR EMPRESA</a></li>
                              <li><a href="{{ route('tenant.companies.index') }}">EMPRESAS Y LOCALES</a></li>
                              <li><a href="{{ route('tenant.users.index') }}">USUARIOS</a></li>
                          </ul>
                          <ul class="nav navbar-nav pull-right">
                              <li class="dropdown"><a href="#" class="dropdown-toggle active"
                                      data-toggle="dropdown" role="button" aria-haspopup="true"
                                      aria-expanded="false">Signed in as <span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                      <li><a href="#">Change Password</a></li>
                                      <li><a href="#">My Profile</a></li>
                                  </ul>
                              </li>
                              <li class=""><a href="#">Logout</a></li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </div>
  </header>
