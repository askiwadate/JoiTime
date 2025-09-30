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
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

  <!-- fullcalendar -->
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.css">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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

      <div class="align-items-center" id="loginHeader-sm">
        <button class="rounded-circle img-nonimg ml-3" data-container="body" data-toggle="popover" data-placement="bottom"><img src="" alt="" class=""></button>
      </div>
    </div>
  </nav> 

  <!-- 管理者用ヘッダー -->
  <!-- <nav class="navbar-after navbar-expand-md navbar-light bg-white" style="padding: 1rem 0.78rem !important">
    <div class="container-fluid">
      <a href="" class="pl-3">
        <img src="{{ asset('img/logo.png') }}" alt="">
      </a>
    </div>
  </nav>  -->

  <main class="flex-grow-1 d-flex flex-column">
  @yield('content')
  </main>
  @yield('scripts')
  <script>
    $(function () {
       $('[data-toggle="popover"]').popover({
       html: true,
       content: `
      <div class="">
       <div>プロフィール画像</div>
       <p>ユーザー名</p>
       <p>生年月日</p>
      </div>
    `,
    placement: 'bottom'
  });
});
</script>
</body>
</html>

