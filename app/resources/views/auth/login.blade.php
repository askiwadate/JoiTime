@extends('layouts.layout')

@section('content')
<section class="d-flex align-items-center" style="background-color: #FFFDF8; min-height: calc(100vh - 57px);">
    <div class="card card-body col-6 m-auto">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <p class="h3 font-weight-bold card-title text-center mt-3">ログイン</p>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group mt-4 mr-2 ml-3">
                <label for="email">メールアドレス<span class="ml-2 btn-danger rounded btn-required">必須</span></label>
                <input type="email" class="form-control w-100" id="email" name="email" value="{{ old('email') }}" placeholder="test@test.co.jp" required>
            </div>

            <div class="form-group mr-2 ml-3">
                <label for="password">パスワード<span class="ml-2 btn-danger rounded btn-required">必須</span></label>
                <input type="password" class="form-control w-100" id="password" name="password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('password.request')}}" class="btn-link">パスワードを忘れた方はこちら</a>
            </div>

            <div class="text-center mt-4 form-group">
                <button type="submit" class="mt-3 btn-submit">ログイン</button>
            </div>
        </form>
    </div>
</section>
@endsection