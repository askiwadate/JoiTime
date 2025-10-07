<!DOCTYPE html>
<html lang="ja">
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
  @guest
  <nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container-fluid">
      <a href="{{ route('login') }}" class="pl-3">
        <img src="{{ asset('img/logo.png') }}" alt="">
      </a>
      <form action="{{ route('register') }}">
        @csrf
        <button class="btn primary-btn ml-3" style="color: #3E6ED6;">新規登録</button>
      </form>
    </div>
  </nav>
  @endguest
  <!-- ログイン後 -->
  @auth
  <!-- 管理者用ヘッダー -->
  @if(Auth::user()->role === 0)
  <nav class="navbar-after navbar-expand-md navbar-light bg-white" style="padding: 1rem 0.78rem !important">
    <div class="container-fluid">
      <a href="" class="pl-3">
        <img src="{{ asset('img/logo.png') }}" alt="">
      </a>
      <div>
        <a href="#" id="logout-link-admin">ログアウト</a>
      </div>
    </div>
  </nav> 
  <!-- 一般ユーザー用ヘッダー -->
  @elseif(Auth::user()->role === 1)
  <nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container-fluid">
      @if(isset($myCalendars) && $myCalendars->isNotEmpty())
      <a href="{{ route('calendars.show', ['calendar_id' => $myCalendars->first()->id ]) }}" class="pl-3">
        <img src="{{ asset('img/logo.png') }}" alt="">
      </a>
      @endif
      <div class="align-items-center" id="loginHeader-sm">
      @if(Auth::user()->icon)
        <img src="{{ asset('storage/' . Auth::user()->icon) }}" alt="アイコン" class="rounded-circle" width="35" height="35" data-container="body" data-toggle="popover" data-placement="bottom">
        @else
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" style="width: 2rem;" data-container="body" data-toggle="popover" data-placement="bottom"><path d="M463 448.2C440.9 409.8 399.4 384 352 384L288 384C240.6 384 199.1 409.8 177 448.2C212.2 487.4 263.2 512 320 512C376.8 512 427.8 487.3 463 448.2zM64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320zM320 336C359.8 336 392 303.8 392 264C392 224.2 359.8 192 320 192C280.2 192 248 224.2 248 264C248 303.8 280.2 336 320 336z"/></svg>
      @endif
      </div>
    </div>
  </nav>
  @endif
  @endauth
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>

  <form id="signout-form" action="{{ route('signout') }}" method="POST" style="display: none;">
    @csrf
  </form>

  @auth
  <script>
  $(function () {
    // Popover 初期化
    $('[data-toggle="popover"]').popover({
        html: true,
        content: `
        <div class="text-center">
            <div class="mb-3 mt-3">
              @if(Auth::user()->icon)
              <img src="{{ asset('storage/' . Auth::user()->icon) }}" alt="アイコン" class="rounded-circle" width="60" height="60" data-container="body" data-toggle="popover" data-placement="bottom">
              @else
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" style="width: 2rem;" data-container="body" data-toggle="popover" data-placement="bottom"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M463 448.2C440.9 409.8 399.4 384 352 384L288 384C240.6 384 199.1 409.8 177 448.2C212.2 487.4 263.2 512 320 512C376.8 512 427.8 487.3 463 448.2zM64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320zM320 336C359.8 336 392 303.8 392 264C392 224.2 359.8 192 320 192C280.2 192 248 224.2 248 264C248 303.8 280.2 336 320 336z"/></svg>
              @endif
            </div>
            <div><p>{{ Auth::user()->name }}</p></div>
            <div>              
              @if(Auth::user()->birthday)
              <p>{{ Auth::user()->birthday }}</p>
              @endif
            </div>
            <div class="mb-3">
              <a href="#" id="logout-link">ログアウト</a>
            </div>
            <div class="mb-3">
              <a href="#" id="signout-link" class="text-danger">退会する</a>
            </div>
        </div>
        `,
        placement: 'bottom'
    });
    
    // ログアウト(一般ユーザー用)
    $(document).on('click', '#logout-link', function(e) {
        e.preventDefault();
        $('#logout-form').submit();
    });

    // アカウント削除(一般ユーザー用)
     $(document).on('click', '#signout-link', function(e) {
         e.preventDefault();
         // 確認ダイアログ
         if(confirm('本当に退会しますか？')){
           $('#signout-form').submit();
         }
     });

    // ログアウト(管理者用)
    $(document).on('click', '#logout-link-admin', function(e) {
        e.preventDefault();
        $('#logout-form').submit();
    });

 });
</script>
@endauth

  <main class="flex-grow-1 d-flex flex-column">
  @yield('content')
  </main>
  @yield('scripts')
</body>
</html>


