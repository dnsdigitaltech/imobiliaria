
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url(mix('backend/assets/plugins/fontawesome-free/css/all.css')) }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ url(mix('backend/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.css')) }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url(mix('backend/assets/plugins/icheck-bootstrap/icheck-bootstrap.css')) }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url(mix('backend/assets/plugins/jqvmap/jqvmap.css')) }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url(mix('backend/assets/css/adminlte.css')) }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url(mix('backend/assets/plugins/overlayScrollbars/css/OverlayScrollbars.css')) }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url(mix('backend/assets/plugins/daterangepicker/daterangepicker.css')) }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url(mix('backend/assets/plugins/summernote/summernote-bs4.css')) }}">

   <!-- DataTables -->
   <link rel="stylesheet" href="{{ url(mix('backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')) }}">
   <link rel="stylesheet" href="{{ url(mix('backend/assets/plugins/datatables-responsive/css/responsive.bootstrap4.css')) }}">
   <link rel="stylesheet" href="{{ url(mix('backend/assets/plugins/datatables-buttons/css/buttons.bootstrap4.css')) }}">
</head>
<body class="sidebar-mini layout-fixed control-sidebar-slide-open layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ url(asset('backend/assets/img/AdminLTELogo.png')) }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
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

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ url(asset('backend/assets/img/user1-128x128.jpg'))}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-sign-out-alt"></i> Sair 
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url(asset('backend/assets/img/AdminLTELogo.png'))}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">IMOBSystem</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url(asset('backend/assets/img/user2-160x160.jpg'))}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Davi Bernardo</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> 
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Clientes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empresas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Time</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Criar Novo</p>
                </a>
              </li>              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Imóveis
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Criar Novo</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Contratos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Criar Novo</p>
                </a>
              </li>              
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="fas fa-reply"></i>
              <p>
                Ver Site 
              </p>
            </a>
          </li>    
          <li class="nav-item">
            <a href="iframe.html" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Sair</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">    
    @yield('content') 
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url(mix('backend/assets/plugins/jquery/jquery.js')) }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url(mix('backend/assets/plugins/jquery-ui/jquery-ui.js')) }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url(mix('backend/assets/plugins/bootstrap/js/bootstrap.bundle.js')) }}"></script>
<!-- ChartJS -->
<script src="{{ url(mix('backend/assets/plugins/chart.js/Chart.js')) }}"></script>
<!-- Sparkline -->
<script src="{{ url(mix('backend/assets/plugins/sparklines/sparkline.js')) }}"></script>
<!-- JQVMap -->
<script src="{{ url(mix('backend/assets/plugins/jqvmap/jquery.vmap.js')) }}"></script>
<script src="{{ url(mix('backend/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')) }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url(mix('backend/assets/plugins/jquery-knob/jquery.knob.min.js')) }}"></script>
<!-- daterangepicker -->
<script src="{{ url(mix('backend/assets/plugins/moment/moment.min.js')) }}"></script>
<script src="{{ url(mix('backend/assets/plugins/daterangepicker/daterangepicker.js')) }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url(mix('backend/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.js')) }}"></script>
<!-- Summernote -->
<script src="{{ url(mix('backend/assets/plugins/summernote/summernote-bs4.js')) }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url(mix('backend/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.js')) }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ url(mix('backend/assets/plugins/datatables/jquery.dataTables.js')) }}"></script>
<script src="{{ url(mix('backend/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')) }}"></script>
<script src="{{ url(mix('backend/assets/plugins/datatables-responsive/js/dataTables.responsive.js')) }}"></script>
<script src="{{ url(mix('backend/assets/plugins/datatables-responsive/js/responsive.bootstrap4.js')) }}"></script>
<script src="{{ url(mix('backend/assets/plugins/datatables-buttons/js/dataTables.buttons.js')) }}"></script>
<script src="{{ url(mix('backend/assets/plugins/jszip/jszip.js')) }}"></script>
<script src="{{ url(mix('backend/assets/plugins/pdfmake/pdfmake.js')) }}"></script>
<script src="{{ url(mix('backend/assets/plugins/pdfmake/vfs_fonts.js')) }}"></script>
<script src="{{ url(mix('backend/assets/plugins/datatables-buttons/js/buttons.html5.js')) }}"></script>
<script src="{{ url(mix('backend/assets/plugins/datatables-buttons/js/buttons.print.js')) }}"></script>
<script src="{{ url(mix('backend/assets/plugins/datatables-buttons/js/buttons.colVis.js')) }}"></script>
<!-- AdminLTE App -->
<script src="{{ url(mix('backend/assets/js/adminlte.js')) }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url(mix('backend/assets/js/demo.js')) }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url(mix('backend/assets/js/pages/dashboard.js')) }}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>