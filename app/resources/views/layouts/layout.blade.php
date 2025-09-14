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
  <!-- ログイン前 -->
  <!-- <nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container-fluid">
      <a href="" class="pl-3">
        <img src="{{ asset('img/logo.png') }}" alt="">
      </a>
    </div>
  </nav> -->

  <!-- ログイン後 -->
  <nav class="navbar-after navbar-expand-md navbar-light bg-white">
    <div class="container-fluid">
      <a href="" class="pl-3">
        <img src="{{ asset('img/logo.png') }}" alt="">
      </a>

      <div class="d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2 mr-3 ml-3"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M480 272C480 317.9 465.1 360.3 440 394.7L566.6 521.4C579.1 533.9 579.1 554.2 566.6 566.7C554.1 579.2 533.8 579.2 521.3 566.7L394.7 440C360.3 465.1 317.9 480 272 480C157.1 480 64 386.9 64 272C64 157.1 157.1 64 272 64C386.9 64 480 157.1 480 272zM272 416C351.5 416 416 351.5 416 272C416 192.5 351.5 128 272 128C192.5 128 128 192.5 128 272C128 351.5 192.5 416 272 416z"/></svg>
        <button class="rounded-circle img-nonimg ml-3"><img src="" alt="" class=""></button>
      </div>
    </div>
  </nav>
  <main class="flex-grow-1 d-flex flex-column">
  @yield('content')
  </main>
</body>
</html>