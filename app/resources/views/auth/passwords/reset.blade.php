@extends('layouts.layout')

@section('content')
<section class="d-flex align-items-center" style="background-color: #FFFDF8; min-height: calc(100vh - 57px);">
    <div class="card card-body col-6 m-auto">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <p class="h3 font-weight-bold card-title text-center mt-3">パスワードリセット</p>

            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group mt-4 mr-2 ml-3">
                <label for="email">メールアドレス</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group mr-2 ml-3">
                <label for="password">パスワード</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group mr-2 ml-3">
                <label for="password-confirm">再パスワード入力</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="text-center mt-4 form-group">
                <button type="submit" class="mt-3 btn-submit">変更</button>
            </div>
        </form>
    </div>
</section>
@endsection
