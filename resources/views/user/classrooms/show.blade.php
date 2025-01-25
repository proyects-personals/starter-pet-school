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
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route("user.dashboard")}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Escuelas</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Reservas</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper" style="background-color: slategrey;">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color: #2d3e50;">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="{{asset('assets-back/images/logo-mini.svg')}}" alt="logo" /></a>
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
                   <!-- Opción de cerrar sesión -->
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
                    </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="container mt-5 mb-5">
          @foreach ($classrooms as $classroom)
            <div class="row mb-4">
              <div class="col">
                <!-- Cuadro del contenido -->
                <div class="card shadow-lg mt-3">
                  <br>
                  <br>
                  <br> <!-- Margen superior en el cuadro corregir -->
                  <div class="card-body" style="background-color: #D3D3D3;">
      
                    <!-- Título y descripción -->
                    <h5 class="card-text text-black">{{ $classroom->name }}</h5> <!-- Asegúrate de que aquí esté la clase text-black -->
                    <p class="card-text text-black">{{ $classroom->description }}</p>
                    <p class="card-text text-black">Capacidad: {{ $classroom->capacity }}</p>
                
                    @if ($classroom->capacity > 0)
                      @php
                        $hasReservation = $classroom->reservations()->where('user_id', auth()->id())->exists();
                      @endphp
                
                      @if ($hasReservation)
                        <p class="text-danger mt-2 text-black">Ya tienes una reserva para esta aula.</p>
                      @else
                        <!-- Formulario para realizar la reserva -->
                        <form action="{{ route('reservations.create') }}" method="POST">
                          @csrf
                          <input type="hidden" name="classroom_id" value="{{ $classroom->id }}">
                          <input type="hidden" name="school_id" value="{{ $school->id }}">
                          <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                          <input type="hidden" name="status" value="pendiente">
                
                          <!-- Campo para seleccionar la fecha -->
                          <div class="mb-3">
                            <label for="date_{{ $classroom->id }}" class="form-label text-black">Fecha</label>
                            <input type="date" id="date_{{ $classroom->id }}" name="date" required class="form-control">
                          </div>
                
                          <!-- Campo para seleccionar la hora -->
                          <div class="mb-3">
                            <label for="time_{{ $classroom->id }}" class="form-label text-black">Hora</label>
                            <input type="time" id="time_{{ $classroom->id }}" name="time" required class="form-control">
                          </div>
                
                          <!-- Botón para enviar el formulario -->
                          <button type="submit" class="btn btn-primary w-100 text-black">Reservar Aula</button>
                        </form>
                      @endif
                    @else
                      <p class="text-danger mt-2 text-black">No hay capacidad disponible para esta aula.</p>
                    @endif
                  </div>
                </div>
                
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- plugins:js -->
    <script src="{{asset('assets-back/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('assets-back/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets-back/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets-back/js/misc.js')}}"></script>
    <script src="{{asset('assets-back/js/settings.js')}}"></script>
    <script src="{{asset('assets-back/js/todolist.js')}}"></script>
  </body>
</html>
