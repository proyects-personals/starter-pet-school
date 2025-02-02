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
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#EEFFFA;">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background-color:#EEFFFA;">
          <a class="sidebar-brand brand-logo"><img src="../imagenes\gl.png" alt="logo" style="height: 90px; object-fit: contain;  margin-top: 5px;" /></a>
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
        <nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color:#EEFFFA ;">
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
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" 
    aria-labelledby="profileDropdown" style="background-color: #EEFFFA; border: none;">
    
    <div class="dropdown-divider"></div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="dropdown-item text-black" 
            style="background-color: #EEFFFA; color: black; border: none; width: 100%; padding: 10px; text-align: center; display: flex; align-items: center; gap: 10px;">
            
            <div class="preview-thumbnail">
                <div class="preview-icon rounded-circle" style="background-color: #EEFFFA;">
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
          <div class="content-wrapper" style="background-color:  #F8F8F8;">
            <div class="page-header">
              <h3 class="page-title" style="color: black;">Mis reservas</h3>
            </div>
            <div class="row">
              <div class="col">
                <div class="card" style="background-color:  #b9f3b9;">
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
                     <!-- Tabla de reservas -->
                            <!-- Tabla de reservas -->
                          <table class="table table-bordered table-hover" style="background-color: #F8F9FA; border-color: #DDDDDD; color: black;">
                            <thead style="background-color: #EAEAEA; color: black;">
                                <tr>
                                    <th scope="col">Aula</th>
                                    <th scope="col">Escuela</th>
                                    <th scope="col">Fecha y Hora</th> <!-- Nueva columna para fecha y hora -->
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservations as $reservation)
                                    <tr style="background-color: #F8F9FA; color: black;">
                                        <td>{{ $reservation->classroom->name }}</td>
                                        <td>{{ $reservation->school->name }}</td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($reservation->classroom->schedule)->format('d/m/Y h:i A') }} 
                                            <!-- Formato: día/mes/año hora:minutos AM/PM -->
                                        </td>
                                        <td>
                                            <span class="badge" 
                                                  style="background-color: 
                                                  {{ $reservation->status == 'Aprobada' ? '#28a745' : ($reservation->status == 'Pendiente' ? '#ffc107' : '#dc3545') }};
                                                  color: black; padding: 5px 10px; border-radius: 5px;">
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