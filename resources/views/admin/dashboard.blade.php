<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Administrador</title>
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

    <!-- Custom Styles -->
    <style>
        .table-responsive {
            border: 1px solid #ddd; /* Borde alrededor de la tabla */
            border-radius: 8px; /* Bordes redondeados */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra sutil */
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd; /* Línea sutil para separar las filas */
        }
        tr:nth-child(even) {
            background-color: #f9f9f9; /* Fila con fondo gris claro */
        }
        th {
            background-color: #D3D3D3; /* Color de fondo para los encabezados */
            color: white; /* Letra blanca en los encabezados */
        }
        td {
            color: black; /* Color negro para las celdas */
        }
        .btn {
            border-radius: 5px; /* Bordes redondeados en los botones */
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <!-- cambiar color-->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#EEFFFA;">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background-color:#EEFFFA;">
          <a class="sidebar-brand brand-logo" ><img src="../imagenes\gl.png" alt="logo" style="height: 90px; object-fit: contain;  margin-top: 5px;" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item menu-items">
            <a class="nav-link" href="">
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
        <nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color:#EEFFFA;">
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
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown" style="background-color: white; border: 1px solid #DDDDDD; box-shadow: none;">
                  <div class="dropdown-divider" style="background-color: #DDDDDD;"></div>
               <a class="dropdown-item preview-item" style="background-color: white; color: black; display: flex; align-items: center;">
            <div class="preview-thumbnail">
                 <div class="preview-icon rounded-circle" style="background-color: white;">
                <i class="mdi mdi-logout text-danger"></i>
             </div>
         </div>
              <form method="POST" action="{{ route('logout') }}" style="margin: 0; width: 100%;">
                   @csrf
                <button type="submit" class="dropdown-item text-black" 
                    style="background-color: white; color: black; border: none; width: 100%; text-align: left;">
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
        <div class="main-panel">
          <div class="content-wrapper  "style="background-color: #F8F8F8;">
            <div class="page-header">
              <h3 class="page-title" style="color: black;">Reservas de clases</h3>

            </div>
            {{--  --}}
            <div class="row">
              <div class="col">
                <div class="card" style="background-color:#b9f3b9;">
                  
                    <div class="table-responsive">
                        <table class="min-w-full table-auto">
                            <thead>
                              <tr class="border-b">
                                <th class="px-4 py-2 text-left" style="color: black;">Usuario</th>
                                <th class="px-4 py-2 text-left" style="color: black;">Email</th>
                                <th class="px-4 py-2 text-left" style="color: black;">Escuela</th>
                                <th class="px-4 py-2 text-left" style="color: black;">Aula</th>
                                <th class="px-4 py-2 text-left" style="color: black;">Fecha de Reserva</th>
                                <th class="px-4 py-2 text-left" style="color: black;">Estado</th>
                                <th class="px-4 py-2 text-left" style="color: black;">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($reservations as $reservation)
                                    <tr class="border-b">
                                      <td class="px-4 py-2" style="color: black;">{{ $reservation->user->name }}</td>
                                      <td style="color: black;">({{ $reservation->user->email }})</td>
                                      <td style="color: black;">({{ $reservation->school->name }})</td>
                                      <td class="px-4 py-2" style="color: black;">{{ $reservation->classroom->name }}</td>
                                      <td class="px-4 py-2" style="color: black;">{{ \Carbon\Carbon::parse($reservation->classroom->schedule)->format('d/m/Y h:i A') }}</td>
                                    
                                      <td class="px-4 py-2" style="color: black;">{{ $reservation->status }}</td>
                                       <td class="px-4 py-2">
                                            <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('PUT')
                                                <div class="d-flex justify-content-center">
                                                  <button type="submit" name="status" value="Aprobado" class="btn btn-success mx-2" style="background-color: #0090e7; color: black;">Aceptar</button>

                                                </div>
                                                <br>
                                            </form>
                                            <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" class="inline-block ml-2">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" name="status" value="Cancelado" class="btn btn-danger mx-2" style="background-color: #00d25b; color: black;">Cancelar</button>

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
    <!-- plugins:js -->
    <script src="{{asset('assets-back/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <script src="{{asset('assets-back/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets-back/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets-back/js/misc.js')}}"></script>
    <script src="{{asset('assets-back/js/settings.js')}}"></script>
    <script src="{{asset('assets-back/js/todolist.js')}}"></script>
  </body>
</html>
