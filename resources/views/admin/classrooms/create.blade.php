<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Crear aula</title>
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
     <!-- cambiar color-->
     <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#EEFFFA;">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background-color:#EEFFFA;">
        <a class="sidebar-brand brand-logo"><img src="{{asset('imagenes/gl.png')}}" alt="logo" style="height: 90px; object-fit: contain;  margin-top: 5px;"/></a>
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
            <a class="nav-link" href="{{ route('schools.create') }}">
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
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center" style="background-color: #EEFFFA;">
            {{-- Imagen pequeña --}}
            <a class="navbar-brand brand-logo-mini"><img src="{{asset('imagenes/gl.png')}}" alt="logo" style="width: 120px; height: auto;"  /></a>
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
                    <a class="dropdown-item preview-item" style="background-color: #EEFFFA; border: none;">
                      <div class="preview-thumbnail">
                          <div class="preview-icon rounded-circle" style="background-color: #EEFFFA;">
                              <i class="mdi mdi-logout text-danger"></i>
                          </div>
                      </div>
                      <div class="dropdown-divider"></div>
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <button type="submit" class="dropdown-item text-black" 
                              style="background-color: #EEFFFA; color: black; border: none; width: 100%; padding: 10px; text-align: center;">
                              <p class="preview-subject mb-1">Log out</p>
                          </button>
                      </form>
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
          <div class="content-wrapper  "style="background-color:  #F8F8F8; ">
            <div class="page-header">
              <h3 class="page-title block text-lg font-medium text-black">Aulas</h3>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card shadow-lg" style="background-color: #b9f3b9;">
                      <div class="card-body">
                          <h2 class="text-2xl font-medium mb-4 text-center text-lg font-bold text-black">Crear Aula</h2>
                          <form action="{{ route('classrooms.store') }}" method="POST" enctype="space-y-6">
                              @csrf
                              {{-- Aula --}}
                              <div>
                                <label for="school_id" class="form-label font-weight-bold text-black">Escuela</label>
                                <select name="school_id" id="school_id" class="form-control text-black bg-white">
                                    @foreach($schools as $school)
                                        <option value="{{ $school->id }}">{{ $school->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- Nombre del Aula--}}
                            <div>
                              <label for="name" class="form-label font-weight-bold text-black">Nombre del Aula</label>
                              <input type="text" name="name" id="name" required class="form-control" style="background-color: white; color: black;">
                          </div>
                          {{-- Capacidad --}}
                              
                          <div>
                            <label for="capacity" class="form-label font-weight-bold text-black">Capacidad</label>
                            <input type="number" name="capacity" id="capacity" required class="form-control" style="background-color: white; color: black;">
                        </div>
                        {{-- Horario --}}
                        <div>
                          <label for="schedule" class="form-label font-weight-bold text-black">Horario</label>
                          <input type="datetime-local" name="schedule" id="schedule" class="form-control" 
                                 style="background-color: white; color: black;"
                                 value="{{ old('schedule', isset($reservation) ? \Carbon\Carbon::parse($reservation->schedule)->format('Y-m-d\TH:i') : '') }}">
                      </div>
                      
                      
                           {{-- Botón--}}
                           <div class="text-center mt-4">
                            <button type="submit" class="btn w-100 font-weight-bold" style="background-color: #8f5fe8; color: black;">
                                Crear Aula
                            </button>
                        </div>                                              
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          
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