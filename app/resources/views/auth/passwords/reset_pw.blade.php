@extends('layouts/layout')

@section('content')

<section class="d-flex align-items-center" style=" background-color: #FFFDF8; min-height: calc(100vh - 57px);">
  <div class="card card-body col-6 m-auto">
    <form action="" method="POST">
      @csrf
      <p class="h3 font-weight-bold card-title text-center mt-3">パスワードリセット</p>
      <div class="form-group mr-2 ml-3 mt-4">
        <label for="password">新しいパスワード<span class="ml-2 btn-danger rounded btn-required">必須</span></label>
        <input type="password" class="form-control form-inline w-100" id="password" name="password" placeholder="8文字以上で入力してください" required>
      </div>
      <div class="form-group mr-2 ml-3">
        <label for="password">新しいパスワードの確認<span class="ml-2 btn-danger rounded btn-required">必須</span></label>
        <input type="password" class="form-control form-inline w-100" id="password" name="password" placeholder="新しいパスワードを再入力してください" required>
      </div>
      <div class="text-center mt-4 form-group">
        <button type="submit" form="" class="mt-3 btn-submit">変更</button>
      </div>
    </form>
  </div>
</sction>

@endsection