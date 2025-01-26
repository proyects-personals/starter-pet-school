<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Escuelas</title>
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
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#2d3e50;">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background-color:#2d3e50;">
      
          <a class="sidebar-brand brand-logo" href="../../index.html"><img src="../imagenes\dog.png" alt="logo" style="height: 70px; object-fit: contain;  margin-top: 30px;" /></a>
          <a class="sidebar-brand brand-logo-mini" href="../../index.html"><img src="{{asset('assets-back/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
           
            <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('user.dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Escuelas</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('reservations.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Mis Reservas</span>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color: #2d3e50;">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="imagenes" /></a>
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
          <div class="content-wrapper  "style="background-color: slategrey ">
            <div class="page-header">
              <h3 class="page-title" style="color: black;" >Escuelas</h3>
             
            </div>
            <div class="row">
              <div class="col">
                <div class="card" style="background-color: #D3D3D3;">
                  <div class="card-body">
   
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="px-4 py-2 text-left" style="color: black;">Escuelas</th>
                            <th class="px-4 py-2 text-left" style="color: black;">Descripción</th>
                            <th class="px-4 py-2 text-left" style="color: black;">Acción</th>

                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($schools as $school)
                            <tr>
                              <td>
                                <div class="max-w-sm rounded overflow-hidden text-black">
                                  <img class="w-full" src="{{ asset('path_to_image.jpg') }}" alt="Escuela">
                                  <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">{{ $school->name }}</div>
                                  </div>
                                </div>
                                </td>
                                <td>
                                  <p class="text-black">{{ $school->description }}</p>
                                </td>
                                <td>
                                  <div class="px-6 pt-4 pb-2">
                                    <a href="{{ route('classrooms.show', $school->id) }}" class="bg-blue-500 text-black px-4 py-2 rounded">
                                      Ver Aulas Disponibles
                                    </a>
                                  </div>
                                </td>
                                
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


