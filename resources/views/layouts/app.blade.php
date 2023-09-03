<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PixelSage</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  
  {{-- <link rel="stylesheet" href="{{asset('assets/dist/css/css/fontawesome.min.css')}}" --}}

  <style>
    .req_fld::after {
      content: '*';
      color: #f00;
    }
  </style>
  @yield('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">


    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="{{route('dashboard')}}" class="brand-link text-center">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">PixelSage</span>
      </a>

      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            {{-- <a href="{{route('dashboard')}}" class="d-block text-center">{{auth()->user()->name}}</a> --}}
          </div>
          
        </div>

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

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            {{-- @if (in_array(auth()->user()->user_role, ["ADMIN"])) --}}
            <li class="nav-item">
              <a href="{{route('dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            {{-- @endif --}}
      
            <li class="nav-item">
              <a href="{{route('blog.index')}}" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  Blog
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('profile')}}" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                 Profile
                </p>
              </a>
            </li>
   
            <li class="nav-item">
              <a href="{{route('myblog.index')}}" class="nav-link ">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  My Blog
                </p>
              </a>
            </li>
          
            

            <li class="nav-header"></li>
            <li class="nav-item">
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger w-100">
                  <i class="fas fa-sign-out-alt"></i>
                  Logout
                </button>
              </form>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="content-wrapper">

      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">@yield('title')</h1>
            </div>
          </div>
        </div>
      </div>

      <section class="content">
        @yield('content')
      </section>
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

  <script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- SweetAlert2 -->
  <script src="{{asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('assets/dist/js/adminlte.js')}}"></script>

  {{-- <script src="{{asset('assets/dist/js/js/fontawesome.min.js')}}"></script> --}}

  <script>
    var Toast = Swal.mixin({
      // toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 5000
    });
    function make_notify(status, msg) {
        Toast.fire({
          icon: status,
          title: msg
        })
    }
  </script>
  @if (session()->has('notify_message'))
  <script>
    $(document).ready(function () {
      make_notify('{{ session()->get("notify_message")["status"] ?? "success" }}', '{{ session()->get("notify_message")["msg"] ?? "" }}')
    });
  </script>
  @endif

  @yield('scripts')
</body>

</html>