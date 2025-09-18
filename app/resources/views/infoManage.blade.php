@extends('layouts/layout')

@section('content')

<section style="background-color: #FFFDF8; min-height: calc(100vh - 57px);">
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light collapse">
        <!-- サイドバーコンテンツ -->
        <div class="position-sticky pt-md-5" style="background-color: #FFFDF8; min-height: calc(100vh - 57px); padding: 0rem 0.78rem 0.78rem 0.78rem;">
          <ul class="nav flex-column align-items-center">
            <li class="nav-item mb-4">
              <a class="nav-link flex-sm align-items-center" aria-current="page" href="#" data-toggle="modal" data-target="#categoryAddModal">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M341.8 72.6C329.5 61.2 310.5 61.2 298.3 72.6L74.3 280.6C64.7 289.6 61.5 303.5 66.3 315.7C71.1 327.9 82.8 336 96 336L112 336L112 512C112 547.3 140.7 576 176 576L464 576C499.3 576 528 547.3 528 512L528 336L544 336C557.2 336 569 327.9 573.8 315.7C578.6 303.5 575.4 289.5 565.8 280.6L341.8 72.6zM304 384L336 384C362.5 384 384 405.5 384 432L384 528L256 528L256 432C256 405.5 277.5 384 304 384z"/></svg>
                <span class="ml-2">ダッシュボード</span>
              </a>
            </li>
            <li class="nav-item mb-4">
              <a class="nav-link flex-sm align-items-center panel-link" aria-current="page" href="#" id="panel-new">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z"/></svg>
                <span class="ml-2">お知らせ管理</span>
              </a>
            </li>
						<li class="nav-item mb-4">
              <a class="nav-link flex-sm align-items-center" aria-current="page" href="#" data-toggle="modal" data-target="#categoryAddModal">
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
				<h2 class="font-weight-bolder">お知らせ管理</h2>
        <div class="col-10 m-auto">
          <div class="card mt-4">
            <div class="card-body">
              <form>
              @csrf
              <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" class="form-control" id="title" placeholder="タイトルを入力してください">
              </div>
              <div class="form-group">
                <label for="keywords">キーワード</label>
                <input type="text" class="form-control" id="keywords" placeholder="キーワードを入力してください">
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
  						<thead>
    						<tr>
      						<th scope="col">記事番号</th>
      						<th scope="col">タイトル</th>
									<th scope="col">公開日</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
    						</tr>
  						</thead>
  						<tbody>
    						<tr>
      						<th scope="row">7</th>
      						<td>参議院選挙の投票日をカレンダーに...</td>
									<td>2025.08.21</td>
                  <td><button type="submit" class="btn btn-primary">編集</button></td>
                  <td><button type="submit" class="btn btn-danger">削除</button></td>
    						</tr>
    						<tr>
      						<th scope="row">7</th>
      						<td>参議院選挙の投票日をカレンダーに...</td>
									<td>2025.08.21</td>
                  <td><button type="submit" class="btn btn-primary">編集</button></td>
                  <td><button type="submit" class="btn btn-danger">削除</button></td>
    						</tr>
    						<tr>
      						<th scope="row">7</th>
      						<td>参議院選挙の投票日をカレンダーに...</td>
									<td>2025.08.21</td>
                  <td><button type="submit" class="btn btn-primary">編集</button></td>
                  <td><button type="submit" class="btn btn-danger">削除</button></td>
    						</tr>
  					  </tbody>
					  </table>
          </div>
          <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
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
