@extends('layouts/layout')

@section('content')

<section class="d-flex align-items-center" style=" background-color: #FFFDF8; min-height: calc(100vh - 57px);">
  <div class="card card-body col-6 m-auto">
    <form action="" method="POST">
      @csrf
      <p class="h3 font-weight-bold card-title text-center mt-3">内容確認</p>
      <div class="">
        <div class="d-flex justify-content-between align-items-center mt-4">
          <label for="email" class="mb-0">ユーザー名<span class="badge badge-danger ml-2 mr-2">必須</span></label>
          <input type="text" class="form-control-inline" id="email" name="email" required>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-4">
          <label for="email">メールアドレス<span class="badge badge-danger ml-2 mr-2">必須</span></label>
          <input type="text" class="form-control-inline" id="email" name="email" required>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-4">
          <label for="password">パスワード<span class="badge badge-danger ml-2 mr-2">必須</span></label>
          <input type="password" class="form-control-inline" id="password" name="password" required>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-4">
          <label for="password">生年月日</label>
          <input type="date" class="ml-2 form-control-inline" id="password" name="password" required>
        </div>
        <div class="text-center mt-4 form-group">
          <button type="submit" form="" class="mr-1 mr-1 btn-light btn-light-radius">修正</button>
          <button type="submit" form="" class="mr-1 mr-1 btn-submit">確定</button>
        </div>
      </div>
    </form>
  </div>
</sction>
@endsection