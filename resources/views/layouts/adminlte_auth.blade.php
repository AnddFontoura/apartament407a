<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Wyvern @if(isset($page_title)) | {{ $page_title }} @endif</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/login_theme.css') }}">
</head>

<body class="container-fluid">

  @yield('adminlte_content')
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Bootstrap 5 -->
  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

  </body>
</html>
