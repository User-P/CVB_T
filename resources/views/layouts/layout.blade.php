<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
    <!-- Font Awesome CSS-->
  <link rel="stylesheet" href={{asset('css/font-awesome.min.css')}}>
    <!-- Custom Font Icons CSS-->
  <link rel="stylesheet" href={{asset('css/font.css')}}>
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
  <link rel="stylesheet" href={{asset('css/style.default.css')}} id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href={{asset('css/custom.css')}}>
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
        @include('layouts.navbar')
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('layouts.sidebar')
      <!-- Sidebar Navigation end-->
      @yield('content')
    </div>
    <!-- JavaScript files-->
<script src={{asset('js/jquery.min.js')}}></script>
    <script src={{asset('js/popper.js/umd/popper.min.js')}}> </script>
    <script src={{asset('js/bootstrap.min.js')}}></script>
    <script src={{asset('js/chart.js/Chart.min.js')}}></script>
    <script src={{asset('js/jquery-validation/jquery.validate.min.js')}}></script>
    <script src={{asset('js/charts-home.js')}}></script>
    <script src={{asset('js/front.js')}}></script>
  </body>
</html>