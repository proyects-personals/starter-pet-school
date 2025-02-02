<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets-back/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-back/vendors/css/vendor.bundle.base.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets-back/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets-back/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#EEFFFA;">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background-color:#EEFFFA;">
          <a class="sidebar-brand brand-logo" ><img src="{{asset('imagenes\gl.png')}}" alt="logo" style="height: 90px; object-fit: contain;  margin-top: 5px;"/></a>
        </div>
        <ul class="nav">
          <li class="nav-item menu-items">
            <a class="nav-link"  href="{{ route('admin.dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Administrador</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('schools.create')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Crear escuela</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('classrooms.create')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Crear aula</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('classrooms.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Lista de Aulas</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('schools.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Lista de escuelas</span>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color: #EEFFFA;">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="{{asset('assets-back/images/logo-mini.svg" alt="logo')}}" /></a>
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
                  
                    <!-- Opción de cerrar sesión como enlace -->
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-logout text-danger"></i>
                        </div>
                      </div>
                      <div class="dropdown-divider"></div>
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item text-black">
                          <p class="preview-subject mb-1">Log out</p>
                        </button>
                      </form>
                    </div>
                    </a>
                  
                    <!-- Opción de cerrar sesión como botón en un formulario -->
                   
                  
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper  "style="background-color: #F8F8F8; ">
           
            <div class="row">
              <div class="col">
                <div class="card" style="background-color: #b9f3b9;">
                  <div class="card-body">
                    </p>
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                      <h1 class="text-2xl font-semibold mb-6 text-black">Editar Escuela: {{ $school->name }}</h1>

<!-- Formulario para editar la escuela -->
<form action="{{ route('schools.update', $school) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Nombre de la escuela</label>
        <input type="text" name="name" id="name" value="{{ old('name', $school->name) }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea name="description" id="description" class="form-control">{{ old('description', $school->description) }}</textarea>
    </div>

    <div class="form-group">
        <label for="address">Dirección</label>
        <input type="text" name="address" id="address" value="{{ old('address', $school->address) }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="phone_number">Teléfono</label>
        <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $school->phone_number) }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Correo Electrónico</label>
        <input type="email" name="email" id="email" value="{{ old('email', $school->email) }}" class="form-control">
    </div>

    {{-- <div class="form-group">
        <label for="image">Imagen de la escuela</label>
        <input type="file" name="image" id="image" class="form-control">
        @if ($school->image)
            <p>Imagen actual: <img src="{{ Storage::url($school->image) }}" alt="Imagen de la escuela" style="width: 100px;"></p>
        @endif
    </div> --}}

    <button type="submit" class="btn btn-primary">Actualizar escuela</button>
</form>




                    </div>
                </div>
                  </div>
                </div>
              </div>
             
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets-back/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets-back/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets-back/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets-back/js/misc.js')}}"></script>
    <script src="{{asset('assets-back/js/settings.js')}}"></script>
    <script src="{{asset('assets-back/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>

