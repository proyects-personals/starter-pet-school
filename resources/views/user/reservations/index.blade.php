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
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets-back/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets-back/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- Sidebar -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#2d3e50;">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background-color:#2d3e50;">
          <a class="sidebar-brand brand-logo" href="../../index.html">
            <img src="../imagenes/dog.png" alt="logo" style="height: 70px; object-fit: contain; margin-top: 30px;" />
          </a>
          <a class="sidebar-brand brand-logo-mini" href="../../index.html">
            <img src="{{asset('assets-back/images/logo-mini.svg')}}" alt="logo" />
          </a>
        </div>
        <ul class="nav">
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('user.dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Escuelas</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('reservations.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Mis Reservas</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- Main content -->
      <div class="container-fluid page-body-wrapper">
        <!-- Navbar -->
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
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item text-black">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-logout text-danger"></i>
                        </div>
                      </div>
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
        <!-- Main panel -->
        <div class="main-panel">
          <div class="content-wrapper" style="background-color: slategrey;">
            <div class="page-header">
              <h3 class="page-title" style="color: black;">Mis reservas</h3>
            </div>
            <div class="row">
              <div class="col">
                <div class="card" style="background-color: #D3D3D3;">
                  <div class="card-body">
                    <div class="table-responsive">
                      <!-- Success and error messages -->
                      @if(session('success'))
                        <div class="alert alert-success">
                          {{ session('success') }}
                        </div>
                      @endif

                      @if(session('error'))
                        <div class="alert alert-danger">
                          {{ session('error') }}
                        </div>
                      @endif

                      <!-- Improved table -->
                      <table class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Aula</th>
                            <th scope="col">Escuela</th>
                            <th scope="col">Estado</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($reservations as $reservation)
                            <tr>
                              <td>{{ $reservation->classroom->name }}</td>
                              <td>{{ $reservation->school->name }}</td>
                              <td>
                                <span class="badge 
                                  {{ $reservation->status == 'Aprobada' ? 'badge-green' : ($reservation->status == 'Pendiente' ? 'badge-green' : 'badge-dange') }}">
                                  {{ $reservation->status }}
                                </span>
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
          <!-- Footer -->
        </div>
      </div>
    </div>
    <!-- Scripts -->
    <script src="{{asset('assets-back/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('assets-back/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets-back/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets-back/js/misc.js')}}"></script>
    <script src="{{asset('assets-back/js/settings.js')}}"></script>
    <script src="{{asset('assets-back/js/todolist.js')}}"></script>
  </body>
</html>
