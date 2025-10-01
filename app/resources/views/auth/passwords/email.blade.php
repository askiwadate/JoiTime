@extends('layouts/layout')

@section('content')
<!-- <section class="d-flex align-items-center" style=" background-color: #FFFDF8; min-height: calc(100vh - 57px);">
  <div class="card card-body col-6 m-auto">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}">
      @csrf
      <p class="h3 font-weight-bold card-title text-center mt-3">パスワード再設定</p>
      <p class="text-center">パスワード再設定用URLを送信するため、<br>登録メールアドレスを入力してください。</p>
        <div class="align-items-center mt-4 mr-2 ml-3">
          <label for="email">メールアドレス</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="text-center mt-3 form-group">
          <button type="submit" class="mt-4 mr-1 mr-1 btn-submit">送信</button>
        </div>
      </div>
    </form>
  </div>
</sction> -->
<div class="d-flex align-items-center" style=" background-color: #FFFDF8; min-height: calc(100vh - 57px);">
    <div class="card card-body col-6 m-auto">
                <p class="h3 font-weight-bold card-title text-center mt-3">パスワード再設定</p>
                <p class="text-center mb-0">パスワード再設定用URLを送信するため、<br>登録メールアドレスを入力してください。</p>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label pl-0">メールアドレス</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="text-center mt-3 form-group">
                            <div class="col-md-6" style="margin: 0 auto;">
                                <button type="submit" class="btn btn-primary">
                                   送信
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
    </div>
</div>
@endsection
