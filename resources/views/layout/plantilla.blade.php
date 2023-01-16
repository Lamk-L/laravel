<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="{{asset('img/icon.png')}}">
  <title>@yield('titulo')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #ffc44c">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}" role="button">
          <i class="fas fa-door-open"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('img/mesa.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RESTAURANT "U.N.T."</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('home')}}" class="d-block" style="text-transform: uppercase;">{{auth()->user()->rol}}: {{auth()->user()->name ?? auth()->user()->username}}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- Mesas -->
        @if(auth()->user()->rol == 'administrador')
          <!--Mesa -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                MESAS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('mesa.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Listado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('mesa.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Mesa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('mesas')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Mesa</p>
                </a>
              </li>
            </ul>
          </li>
          <!--Producto -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-inbox "></i>
              <p>
                PRODUCTO
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('producto.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Listado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('producto.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Producto</p>
                </a>
              </li>
            </ul>
          </li>
          <!--Cliente -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-user-circle"></i>
              <p>
                CLIENTE
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('cliente.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Listado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('cliente.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Cliente</p>
                </a>
              </li>
            </ul>
          </li>
          <!--Pedido -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-pencil-alt"></i>
              <p>
                PEDIDO
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('pedido.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Listado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('pedido.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Pedido</p>
                </a>
              </li>
            </ul>
          </li>
        @endif

        @if(auth()->user()->rol == 'mozo')
          <!--Mesa -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                MESAS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('mesa.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Listado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('mesas')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Mesa</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Cliente -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-user-circle"></i>
              <p>
                CLIENTE
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('cliente.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Listado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('cliente.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Cliente</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Pedido -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-pencil-alt"></i>
              <p>
                PEDIDO
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('pedido.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Listado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('pedido.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Pedido</p>
                </a>
              </li>
            </ul>
          </li>
        @endif

        @if(auth()->user()->rol == 'cocinero')
          <!--Producto -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-inbox "></i>
              <p>
                PRODUCTO
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('producto.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Listado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('producto.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Producto</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Pedido -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-pencil-alt"></i>
              <p>
                PEDIDO
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('pedido.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Listado</p>
                </a>
              </li>
            </ul>
          </li>
        @endif
    <!--     <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Extras
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boleta de Consumo</p>
                </a>
              </li>
            </ul>
          </li>   --> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       @yield('contenido')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <footer class="main-footer" align="center" style="height: 60px; background-color:#ffc44c">
    <div>
      <p>®Copyright Derechos Reservados 2022 - Restaurante</p>
    </div>
    
   </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
<!-- Script javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
@yield('script')

</body>
</html>
