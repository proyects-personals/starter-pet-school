<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets-back/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-back/vendors/css/vendor.bundle.base.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets-back/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets-back/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- Sidebar -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#2d3e50;">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background-color:#2d3e50;">
          <a class="sidebar-brand brand-logo" href="{{ url('/') }}"><img src="{{ asset('assets-back/images/logo.svg') }}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="{{ url('/') }}"><img src="{{ asset('assets-back/images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Administrador</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('schools.create') }}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Crear escuela</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('classrooms.create') }}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Crear aula</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('classrooms.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Lista de Aulas</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('schools.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Lista de escuelas</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- Main content -->
      <div class="container-fluid page-body-wrapper">
        <nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color: #2d3e50;">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}"><img src="{{ asset('assets-back/images/logo-mini.svg') }}" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <i class="fa-solid fa-user"></i>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <div class="dropdown-divider"></div>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item text-black">
                      <p class="preview-subject mb-1">Log out</p>
                    </button>
                  </form>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- Main Panel -->
        <div class="main-panel">
          <div class="content-wrapper" style="background-color: slategrey;">
            <div class="row">
              <div class="col">
                <div class="card" style="background-color: #D3D3D3;">
                  <div class="card-body">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                      <div class="container">
                        <h1 class="text-2xl font-semibold mb-6 text-black">Lista de Escuelas</h1>
                        <a href="{{ route('schools.create') }}" class="btn btn-primary mb-3">Crear Nueva Escuela</a>

                        @if (session('success'))
                          <div class="alert alert-success">
                            {{ session('success') }}
                          </div>
                        @endif

                        <table class="table">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Descripción</th>
                              <th>Dirección</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($schools as $school)
                              <tr>
                                <td>{{ $school->name }}</td>
                                <td>{{ $school->description }}</td>
                                <td>{{ $school->address }}</td>
                                <td>
                                  <a href="{{ route('schools.edit', $school->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                  <form action="{{ route('schools.destroy', $school->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                  </form>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- plugins:js -->
    <script src="{{ asset('assets-back/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets-back/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets-back/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets-back/js/misc.js') }}"></script>
    <script src="{{ asset('assets-back/js/settings.js') }}"></script>
    <script src="{{ asset('assets-back/js/todolist.js') }}"></script>
  </body>
</html>
