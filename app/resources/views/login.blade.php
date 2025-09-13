@extends('layouts/layout')

@section('content')

<section class="d-flex align-items-center" style=" background-color: #FFFDF8; min-height: calc(100vh - 57px);">
    <div class="card card-body col-6 m-auto">
      <form action="" method="POST">
        @csrf
        <p class="h3 font-weight-bold card-title text-center mt-3">ログイン</p>
        <div class="form-group mt-4 mr-2 ml-3">
          <label for="email">メールアドレス<span class="ml-2 btn-danger rounded btn-required">必須</span></label>
          <input type="text" class="form-control form-inline w-100 m-0" id="email" name="email" placeholder="test@example.com" required>
        </div>
        <div class="form-group mr-2 ml-3">
          <label for="password">パスワード<span class="ml-2 btn-danger rounded btn-required">必須</span></label>
          <input type="password" class="form-control form-inline w-100 m-0" id="password" name="password" required>
        </div>
        <div class="text-center mt-4">
          <a href="" class="btn-link">パスワードを忘れた方はこちら</a>
        </div>
        <div class="text-center mt-4 form-group">
          <button type="submit" form="" class="btn-submit">ログイン</button>
        </div>
      </form>
    </div>
  </section>

@endsection