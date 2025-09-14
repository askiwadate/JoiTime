@extends('layouts/layout')

@section('content')

<section class="d-flex align-items-center" style=" background-color: #FFFDF8; min-height: calc(100vh - 57px);">
  <div class="card card-body col-6 m-auto">
    <form action="" method="POST">
      @csrf
      <p class="h3 font-weight-bold card-title text-center mt-3">パスワード再設定</p>
      <p class="text-center">パスワード再設定用URLを送信するため、<br>登録メールアドレスを入力してください。</p>
        <div class="align-items-center mt-4 mr-2 ml-3">
          <label for="email">メールアドレス</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="test@example.com" required>
        </div>
        <div class="text-center mt-3 form-group">
          <button type="submit" form="" class="mt-4 mr-1 mr-1 btn-submit">送信</button>
        </div>
      </div>
    </form>
  </div>
</sction>
@endsection