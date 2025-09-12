@extends('layouts/layout')

@section('content')

<section class="d-flex align-items-center" style=" background-color: #FFFDF8; min-height: calc(100vh - 57px);">
    <!-- <div class="pt-5"> -->
      <div class="card card-body col-6 m-auto">
        <form action="" method="POST">
          @csrf
          <p class="h3 font-weight-bold card-title text-center mt-3">新規登録</p>
          <div class="form-group mt-4 mr-2 ml-3">
            <label for="email">ユーザー名<span class="ml-2 btn-danger rounded btn-required">必須</span></label>
            <input type="text" class="form-control form-inline w-100" id="email" name="email" placeholder="test@example.com" required>
          </div>
          <div class="form-group mr-2 ml-3">
            <label for="email">メールアドレス<span class="ml-2 btn-danger rounded btn-required">必須</span></label>
            <input type="text" class="form-control form-inline w-100" id="email" name="email" placeholder="test@example.com" required>
          </div>
          <div class="form-group mr-2 ml-3">
            <label for="password">パスワード<span class="ml-2 btn-danger rounded btn-required">必須</span></label>
            <input type="password" class="form-control form-inline w-100" id="password" name="password" required>
          </div>
          <div class="form-group mr-2 ml-3">
            <label for="password">生年月日</label>
            <input type="date" class="form-control w-100" id="password" name="password" required>
          </div>
          <div class="text-center mt-4">
            <button type="submit" form="" style="background-color: #3E6ED6; color: #FFFF; border-radius: 6rem; padding: 0.5rem 3.2rem; border: none;">新規登録</button>
          </div>
        </form>
      <!-- </div> -->
    </div>
  </section>

@endsection