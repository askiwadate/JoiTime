<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name','JoiTime') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @yield('stylesheet')

</head>
<body class="d-flex flex-column min-vh-100">
  <nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container">
      <a href="">
        <img src="{{ asset('img/logo.png') }}" alt="">
      </a>
    </div>
  </nav>

  <main class="flex-grow-1 d-flex flex-column">
  @yield('content')
  </main>
</body>
</html>