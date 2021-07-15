<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Arsip Surat</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('admin/assets/dist/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet"
    href="{{ asset('admin/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('admin/assets/plugins/jqvmap/jqvmap.min.css')}}">

  {{-- datepicker --}}
  <link rel="stylesheet" href="{{ asset('admin/assets/plugins/datepicker/css/bootstrap-datepicker3.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/assets/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin/assets/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admin/assets/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="{{ asset('admin/assets/font/font.css')}}" rel="stylesheet">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button">
            <i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/dashboard" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->
      {{-- <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="{{ asset('admin/assets/#')}}">
      <i class="far fa-comments"></i>
      <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="{{ asset('admin/assets/#')}}" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="{{ asset('admin/assets/dist/img/user1-128x128.jpg')}}" alt="User Avatar"
              class="img-size-50 mr-3 img-circle">
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
        <div class="dropdown-divider"></div>
        <a href="{{ asset('admin/assets/#')}}" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="{{ asset('admin/assets/dist/img/user8-128x128.jpg')}}" alt="User Avatar"
              class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                John Pierce
                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">I got your message bro</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="{{ asset('admin/assets/#')}}" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="{{ asset('admin/assets/dist/img/user3-128x128.jpg')}}" alt="User Avatar"
              class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Nora Silvester
                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">The subject goes here</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="{{ asset('admin/assets/#')}}" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="{{ asset('admin/assets/#')}}">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="{{ asset('admin/assets/#')}}" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ asset('admin/assets/#')}}" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ asset('admin/assets/#')}}" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ asset('admin/assets/#')}}" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="{{ asset('admin/assets/#')}}"
          role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      </ul> --}}
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/dashboard" class="brand-link">
        <img src="{{ asset('admin/assets/dist/img/dishub.png')}}" alt="Logo Dishub"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Arsip Surat</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('admin/assets/dist/img/user_2.png')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="/dashboard" class="d-block">{{ auth()->user()->username }}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="/dashboard" class="nav-link active">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  SURAT
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/data_masuk" class="nav-link">
                    <i class="far fa-file nav-icon"></i>
                    <p>MASUK</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/data_keluar" class="nav-link">
                    <i class="far fa-file nav-icon"></i>
                    <p>KELUAR</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/data_SK" class="nav-link">
                    <i class="far fa-file nav-icon"></i>
                    <p>SK</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/data_SPT" class="nav-link">
                    <i class="far fa-file nav-icon"></i>
                    <p>SPT</p>
                  </a>
                </li>
              </ul>
            </li>

            <<a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-reply"></i>
              <p>
                LOG OUT
              </p>
              </a>

        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      {{-- <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ asset('admin/assets/#')}}">Home</a></li>
      <li class="breadcrumb-item active">Dashboard v1</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  </div> --}}
  {{-- @yield('header') --}}
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      @yield('content')

      <!-- Small boxes (Stat box) -->
      <div class="row">

      </div><!-- /.container-fluid -->
  </section>



  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; Asep Syaifudin,S.Kom.,M.Kom.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 2.0.0
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
  <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('admin/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  {{-- <script src="{{ asset('admin/assets/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{ asset('admin/assets/plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{ asset('admin/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  {{-- <script src="{{ asset('admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> --}}
  <!-- jQuery Knob Chart -->
  {{-- <script src="{{ asset('admin/assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script> --}} --}}
  {{-- datepicker --}}
  <script src="{{ asset('admin/assets/plugins/datepicker/js/bootstrap-datepicker.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('admin/assets/plugins/moment/moment.min.js')}}"></script>
  <script src="{{ asset('admin/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('admin/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}">
  </script>
  <!-- Summernote -->
  <script src="{{ asset('admin/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('admin/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('admin/assets/dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('admin/assets/dist/js/pages/dashboard.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('admin/assets/dist/js/demo.js')}}"></script>


  {{-- script data table --}}
  <!-- jQuery -->
  {{-- <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script> --}}
  <!-- Bootstrap 4 -->
  {{-- <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
  <!-- DataTables -->
  <script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.jS')}}"></script>
  <script src="{{ asset('admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ asset('admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <!-- page script -->




  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": true,
        "ordering":false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>




  {{-- <script src="{{ asset('admin/assets/dist/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('admin/assets/dist/js/jquery-3.5.1.js')}}"></script>
  <script src="{{ asset('admin/assets/dist/js/jquery-ui_1_12_1.js')}}"></script>
  <script src="{{ asset('admin/assets/dist/js/jquery-ui.js')}}"></script> --}}

  {{--  // script membuat datepicker dengan format 15-10-2020--}}
  {{-- <script type="text/javascript">
    $('.datepicker').datepicker({
              dateFormat: "dd-mm-yy"
          });
  </script> --}}
  {{-- membuat format tanggal saja, dd/mm/yyyy --}}
  <script type="text/javascript">
    $(function () {
                        $('#datetimepicker4').datetimepicker({
                            format: 'DD-MM-YYYY',
                            autoclose:true,
                            locale:'id'
                            
                        });

                        $('#datetimepicker2').datetimepicker({
                        format: 'DD-MM-YYYY',
                        
                        });
                    });
  </script>


  {{-- koding tombol kembali kehalaman sebelumnya --}}
  <script>
    function goBack() {
        window.history.back();
    }
  </script>




  {{-- <script type="text/javascript">
              $(document).ready(function () {
                              $('.tanggal').datepicker({
                                  format: "dd-mm-yyyy",
                                  autoclose:true
                              });
                          });
          </script> --}}
</body>

</html>