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
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#EEFFFA;">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background-color:#EEFFFA;">
          <a class="sidebar-brand brand-logo" ><img src="../imagenes\gl.png" alt="logo" style="height: 90px; object-fit: contain;  margin-top: 5px;" /></a>

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
        <nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color: #EEFFFA;">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center" style="background-color: #EEFFFA;">
            {{-- Imagen pequeña --}}
            <a class="navbar-brand brand-logo-mini"><img src="../imagenes\gl.png" alt="logo" style="width: 120px; height: auto;"  /></a>
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
                  <form method="POST" action="{{ route('logout') }}" style="margin: 0; width: 100%;">
                    @csrf
                    <button type="submit" class="dropdown-item text-black" 
                    style="background-color: #EEFFFA; color: black; border: none; width: 100%; text-align: left;">
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
          <div class="content-wrapper" style="background-color: #F8F8F8;">
            <div class="row">
              <div class="col">
                  <div class="card" style="background-color: #b9f3b9; border-radius: 10px; padding: 20px;">
                      <div class="card-body" style="background-color: #b9f3b9; border-radius: 10px; padding: 20px;">
                          <div class="p-6" style="background-color: #f0f0f0; color: black; border-radius: 10px; padding: 20px;">
                              <h1 class="text-2xl font-semibold mb-6 text-black">Lista de Escuelas</h1>
                              
                              <a href="{{ route('schools.create') }}" class="btn btn-primary mb-3">Crear Nueva Escuela</a>
          
                              @if(session('success'))
                                  <div class="alert alert-success">
                                      {{ session('success') }}
                                  </div>
                              @endif
          
                              <div class="table-responsive mt-4">
                                  <table class="table table-bordered min-w-full table-auto">
                                      <thead>
                                          <tr style="background-color: #ddd;">
                                              <th class="px-4 py-2 text-left" style="color: black;">Nombre</th>
                                              <th class="px-4 py-2 text-left" style="color: black;">Descripción</th>
                                              <th class="px-4 py-2 text-left" style="color: black;">Dirección</th>
                                              <th class="px-4 py-2 text-left" style="color: black;">Acciones</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($schools as $school)
                                              <tr>
                                                  <td class="px-4 py-2" style="color: black;">{{ $school->name }}</td>
                                                  <td class="px-4 py-2" style="color: black;">{{ $school->description }}</td>
                                                  <td class="px-4 py-2" style="color: black;">{{ $school->address }}</td>
                                                  <td class="px-4 py-2">
                                                      <a href="{{ route('schools.edit', $school->id) }}" class="btn btn-warning">Editar</a>
                                                      <form action="{{ route('schools.destroy', $school->id) }}" method="POST" style="display:inline;">
                                                          @csrf
                                                          @method('DELETE')
                                                          <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta escuela?')">Eliminar</button>
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
