@extends('layouts/layout')

@section('content')

<section style="background-color: #FFFDF8; min-height: calc(100vh - 57px);">
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light collapse">
        <!-- サイドバーコンテンツ -->
        <div class="position-sticky pt-md-5" style="background-color: #FFFDF8; height: 100%; padding: 0rem 0.78rem 0.78rem 0.78rem;">
          <ul class="nav flex-column align-items-center">
            <li class="nav-item mb-4">
              <a class="nav-link flex-sm align-items-center" aria-current="page" href="{{ route('dashboard.index') }}">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M341.8 72.6C329.5 61.2 310.5 61.2 298.3 72.6L74.3 280.6C64.7 289.6 61.5 303.5 66.3 315.7C71.1 327.9 82.8 336 96 336L112 336L112 512C112 547.3 140.7 576 176 576L464 576C499.3 576 528 547.3 528 512L528 336L544 336C557.2 336 569 327.9 573.8 315.7C578.6 303.5 575.4 289.5 565.8 280.6L341.8 72.6zM304 384L336 384C362.5 384 384 405.5 384 432L384 528L256 528L256 432C256 405.5 277.5 384 304 384z"/></svg>
                <span class="ml-2">ダッシュボード</span>
              </a>
            </li>
						<li class="nav-item mb-4">
              <a class="nav-link flex-sm align-items-center" aria-current="page" href="{{ route('users.index') }}">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M320 80C377.4 80 424 126.6 424 184C424 241.4 377.4 288 320 288C262.6 288 216 241.4 216 184C216 126.6 262.6 80 320 80zM96 152C135.8 152 168 184.2 168 224C168 263.8 135.8 296 96 296C56.2 296 24 263.8 24 224C24 184.2 56.2 152 96 152zM0 480C0 409.3 57.3 352 128 352C140.8 352 153.2 353.9 164.9 357.4C132 394.2 112 442.8 112 496L112 512C112 523.4 114.4 534.2 118.7 544L32 544C14.3 544 0 529.7 0 512L0 480zM521.3 544C525.6 534.2 528 523.4 528 512L528 496C528 442.8 508 394.2 475.1 357.4C486.8 353.9 499.2 352 512 352C582.7 352 640 409.3 640 480L640 512C640 529.7 625.7 544 608 544L521.3 544zM472 224C472 184.2 504.2 152 544 152C583.8 152 616 184.2 616 224C616 263.8 583.8 296 544 296C504.2 296 472 263.8 472 224zM160 496C160 407.6 231.6 336 320 336C408.4 336 480 407.6 480 496L480 512C480 529.7 465.7 544 448 544L192 544C174.3 544 160 529.7 160 512L160 496z"/></svg>
                <span class="ml-2">ユーザー管理</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
			<!-- メイン -->
			<!-- サイドバー「ダッシュボード」 -->
			<div class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-4">
				<h3 class="font-weight-bolder">ユーザー管理</h3>
        <div class="col-10 m-auto">
          <div class="card mt-4">
            <div class="card-body">
              <form method="GET">
              @csrf
              <div class="form-group">
                <label for="mail">メールアドレス</label>
                <input type="text" class="form-control" value="{{ $mail }}" id="mail" name="mail" placeholder="メールアドレスを入力してください">
              </div>
              <div class="form-group">
                <label for="name">ユーザー名</label>
                <input type="text" class="form-control" id="name" value="{{ $name }}" name="name" placeholder="ユーザー名を入力してください">
              </div>
              <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-submit">検索</button>
              </div>
            </form>
          </div>
        </div>
        <div class="card mt-4">
          <div class="card-body">
            <table class="table table-borderless" style="border: none;">
  						<thead class="text-center">
    						<tr>
                  <th scope="col"></th>
      						<th scope="col">ユーザー名</th>
      						<th scope="col">メールアドレス</th>
									<th scope="col">登録日</th>
                  <th scope="col">アカウント削除</th>
                  <th scope="col">ステータス</th>
    						</tr>
  						</thead>
              <tbody class="text-center">
                @foreach($users as $user)
                  <tr>
                    <th scope="row">
                    @if($user->icon)
                    <img src="{{ asset('storage/' . $user->icon) }}" style="width: 35px; height:35px;" class="rounded-circle">
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 35px; height:35px;"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2 35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0 256 256 0 1 1 -512 0zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/></svg>
                    @endif
                  </th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('Y.m.d') }}</td>
                    <td>
                      <form id="signout-form" action="{{ route('users.destroy',$user->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">削除</button>
                      </form>
                    </td>
                    <td>
                      @if ($user->del_flg)
                      <span class="badge bg-secondary">退会済み</span>
                      @else
                      <span class="badge bg-success">利用中</span>
                      @endif
                      </td>
                    <td></td>
                  </tr>
                @endforeach
              </tbody>
					  </table>
            <div class="d-flex justify-content-center mt-3">
            {{ $users->links() }} 
            </div>
          </div>
        </div>
      </div>
		</div>
  </div> 
</section>

@endsection
@section('scripts')
<!-- ここでCDNを読み込む -->
<script src="https://unpkg.com/frappe-charts@0.0.5/dist/frappe-charts.min.iife.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
	
// グラフ	
	let data = {
  labels: ["9月", "10月", "12月", "1月", "2月", "3月"],

  datasets: [
    {
      title: "登録者数",
      color: "blue",
      values: [100, 200, 400, 600, 800, 1000],
    },
  ],
};

let chart = new Chart({
  parent: "#chart", // or a DOM element
  title: "登録者数",
  data: data,
  type: "bar",
  height: 150,
  format_tooltip_x: (d) => (d + "").toUpperCase(),
  format_tooltip_y: (d) => d + "人",
});

});
</script>
@endsection
