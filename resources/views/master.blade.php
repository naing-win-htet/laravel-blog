<html>
<head>
  <title> @yield('title') </title>
  <!-- Material Design fonts -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-material-design.css') }}">
  <link rel="stylesheet" href="{{ asset('css/ripples.min.css') }}">

  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/ripples.min.js') }}"></script>
  <script src="{{ asset('js/material.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      // This command is used to initialize some elements and make them work properly
      $.material.init();
    });
  </script>

</head>
<body>
  @include('shared.navbar')
  @yield('content')
</body>
</html>
