<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Himatif | Admin</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-grid.css')}}">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('backendelegant/img/svg/logo.svg')}}" type="image/x-icon">
  <!-- Custom styles -->
  {{-- <link rel="stylesheet" href="{{asset('backendelegant')}}/css/style.min.css"> --}}
  <link rel="stylesheet" href="{{asset('backendelegant/css/style.css')}}">
  <!-- Font Awesome CSS V4.7.0 -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <!-- Font Awesome Css -->
  <link href="{{asset('fontaws/css/fontawesome.css')}}" rel="stylesheet">
  <link href="{{asset('fontaws/css/brands.css')}}" rel="stylesheet">
  <link href="{{asset('fontaws/css/solid.css')}}" rel="stylesheet">
  <link href="{{asset('fontaws/css/regular.css')}}" rel="stylesheet">
  <link href="{{asset('fontaws/css/svg-with-js.css')}}" rel="stylesheet">
  <link href="{{asset('fontaws/css/all.css')}}" rel="stylesheet">
  <link href="{{asset('fontaws/css/all.min.css')}}" rel="stylesheet">
  <!-- Font Awesome JS -->
  <link href="{{asset('fontaws/js/all.js')}}" rel="stylesheet">
  <link href="{{asset('fontaws/js/all.min.js')}}" rel="stylesheet">
  <link href="{{asset('fontaws/js/brands.js')}}" rel="stylesheet">
  <link href="{{asset('fontaws/js/conflict-detention.js')}}" rel="stylesheet">
  <link href="{{asset('fontaws/js/regular.js')}}" rel="stylesheet">
  <link href="{{asset('fontaws/js/solid.js')}}" rel="stylesheet">
  <link href="{{asset('fontaws/js/fontawesome.js')}}" rel="stylesheet">
  <!-- Font Awesome Fonts -->
  <link href="{{asset('fontaws/webfonts/fa-brands-400.tts')}}" rel="stylesheet">
  <link href="{{asset('fontaws/webfonts/fa-reguler-400.tts')}}" rel="stylesheet">
  <link href="{{asset('fontaws/webfonts/fa-solid-900.tts')}}" rel="stylesheet">   
</head>

<body>

  <div class="layer"></div>
  <a class="skip-link sr-only" href="#skip-target">Skip to content</a>

  <div class="page-flex">

    @include('admin.layouts.sidebar')

    <!-- Start Main Wrapper -->
    <div class="main-wrapper">

      @include('admin.layouts.main-nav')
      
      
      <main class="main users chart-page" id="skip-target">
        @yield('main-content')
      </main>

      @include('admin.layouts.footer')

    </div>
    <!-- End Main Wrapper -->

  </div>


  <!-- Chart library -->
  <script src="{{asset('backendelegant/plugins/chart.min.js')}}"></script>
  <!-- Icons library -->
  <script src="{{asset('backendelegant/plugins/feather.min.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{asset('backendelegant/js/script.js')}}"></script>
  <!-- Javascript Bootstrap -->
  <script src="{{asset('bootstrap/js/bootstrap.bundle.js')}}"></script>
  <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>