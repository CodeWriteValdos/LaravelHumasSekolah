<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugin/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/ttd/css/signature-pad.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/datatables/DataTables-1.10.16/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/datatables/Buttons-1.5.1/css/buttons.dataTables.min.css')}}">
    <script src="{{ asset('assets/ttd/js/jquery-2.1.3.min.js') }}"></script>
    <title>LaraHumase</title>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">LaraHumase</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       <!-- User Menu-->
        <li>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="app-nav__item" href="{{ url('/dashs') }}">Home</a>
                    @else
                        <a class="app-nav__item" href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Selamat Datang</p>
          <p class="app-sidebar__user-designation" style="font-size: 12px;">Silahkan Isi Form Input Tamu</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="{{ url('userinputtamu') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Input Tamu</span></a></li>
        <li><a class="app-menu__item" href="{{ url('userdatatamu') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Data Tamu</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      @yield('content')
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/sweetalert.min.js') }}"></script>
    {{-- Untuk Tanda Tangan Plugin --}}
    <script src="{{ asset('assets/ttd/js/bootstrap-select.js') }}"></script>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js') }}"></script>
    
    <link href="{{ asset('assets/ttd/css/jquery.signaturepad.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/ttd/js/numeric-1.2.6.min.js') }}"></script> 
    <script src="{{ asset('assets/ttd/js/bezier.js') }}"></script>
    <script src="{{ asset('assets/ttd/js/jquery.signaturepad.js') }}"></script> 
    
    <script type='text/javascript' src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>
    <script src="{{ asset('assets/ttd/js/json2.min.js') }}"></script>

    <script src="{{ asset('assets/ttd/js/signature_pad.js')}}"></script>
    <script src="{{ asset('assets/ttd/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/plugin/jquery-ui.min.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('assets/js/plugins/pace.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/datatables/Buttons-1.5.1/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/datatables/Buttons-1.5.1/js/buttons.print.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/datatables/Buttons-1.5.1/js/buttons.flash.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/datatables/JSZip-2.5.0/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/datatables/pdfmake-0.1.32/pdfmake.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/datatables/pdfmake-0.1.32/vfs_fonts.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/datatables/Buttons-1.5.1/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript">
        $('#sampleTable').DataTable({
            
        });
    </script>
    @include('component.alert')
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{ asset('assets/js/plugins/chart.js') }}"></script>
  </body>
</html>