@extends('layouts/layout')

@section('content')

<section style="background-color: #FFFDF8; min-height: calc(100vh - 57px);">
  <div class="container-fluid">
    <div class="row w-100">
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light collapse">
        <!-- サイドバーコンテンツ -->
        <div class="position-sticky pt-md-5" style="background-color: #FFFDF8; min-height: calc(100vh - 57px); padding: 0rem 0.78rem 0.78rem 0.78rem;">
          <ul class="nav flex-column align-items-center">
            <li class="nav-item mb-4">
              <a class="nav-link active flex-sm align-items-center" aria-current="page" href="#" data-toggle="modal" data-target="#categoryAddModal">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Pro v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2025 Fonticons, Inc.--><path d="M238.9 336C249.6 336 259.6 341.3 265.5 350.2L277.3 368L304 368C330.5 368 352 389.5 352 416L352 528C352 554.5 330.5 576 304 576L112 576C85.5 576 64 554.5 64 528L64 416C64 389.5 85.5 368 112 368L138.7 368L150.5 350.2C156.4 341.3 166.4 336 177.1 336L238.8 336zM517.5 324C523.1 319.1 531.4 318.7 537.4 323.1C543.4 327.5 545.7 335.5 542.7 342.4L504.3 432L560 432C566.7 432 572.6 436.1 575 442.4C577.4 448.7 575.6 455.7 570.6 460.1L442.6 572.1C437 577 428.7 577.4 422.7 573C416.7 568.6 414.4 560.6 417.4 553.7L455.9 464L400.1 464C393.4 464 387.5 459.9 385.1 453.6C382.7 447.3 384.5 440.3 389.5 435.9L517.5 323.9zM208 424C181.5 424 160 445.5 160 472C160 498.5 181.5 520 208 520C234.5 520 256 498.5 256 472C256 445.5 234.5 424 208 424zM547.8 64.4C554.3 63.3 560.9 64.8 566.3 68.8C572.4 73.3 576 80.5 576 88L576 240L575.7 244.9C572.4 269.1 545.2 288 512 288C476.7 288 448 266.5 448 240C448 213.5 476.7 192 512 192C517.5 192 522.9 192.6 528 193.6L528 144.3L416 177.9L416 288.1L415.7 293C412.4 317.2 385.2 336.1 352 336.1C316.7 336.1 288 314.6 288 288.1C288 261.6 316.7 240.1 352 240.1C357.5 240.1 362.9 240.7 368 241.7L368 136C368 125.4 375 116 385.1 113L545.1 65L547.8 64.4zM252.9 64C290 64 320 94 320 131.1L320 137.2C320 193.3 244.8 249.3 209.7 272.5C198.9 279.6 185.1 279.6 174.3 272.5C139.2 249.4 64 193.3 64 137.2L64 131.1C64 94 94 64 131.1 64C152.2 64 172 73.9 184.7 90.8L192 100.6L199.3 90.8C212 73.9 231.8 64 252.9 64z"/></svg>
                <span class="ml-2">カテゴリ</span>
              </a>
            </li>
            <li class="nav-item mb-4">
              <a class="nav-link  active flex-sm align-items-center panel-link" aria-current="page" href="#" id="panel-new">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M320 64C302.3 64 288 78.3 288 96L288 99.2C215 114 160 178.6 160 256L160 277.7C160 325.8 143.6 372.5 113.6 410.1L103.8 422.3C98.7 428.6 96 436.4 96 444.5C96 464.1 111.9 480 131.5 480L508.4 480C528 480 543.9 464.1 543.9 444.5C543.9 436.4 541.2 428.6 536.1 422.3L526.3 410.1C496.4 372.5 480 325.8 480 277.7L480 256C480 178.6 425 114 352 99.2L352 96C352 78.3 337.7 64 320 64zM258 528C265.1 555.6 290.2 576 320 576C349.8 576 374.9 555.6 382 528L258 528z"/></svg>
                <span class="ml-2">新着</span>
              </a>
            </li>
            <li class="nav-item mb-4">
              <a class="nav-link active flex-sm align-items-center panel-link" aria-current="page" href="#" id="panel-member">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M96 192C96 130.1 146.1 80 208 80C269.9 80 320 130.1 320 192C320 253.9 269.9 304 208 304C146.1 304 96 253.9 96 192zM32 528C32 430.8 110.8 352 208 352C305.2 352 384 430.8 384 528L384 534C384 557.2 365.2 576 342 576L74 576C50.8 576 32 557.2 32 534L32 528zM464 128C517 128 560 171 560 224C560 277 517 320 464 320C411 320 368 277 368 224C368 171 411 128 464 128zM464 368C543.5 368 608 432.5 608 512L608 534.4C608 557.4 589.4 576 566.4 576L421.6 576C428.2 563.5 432 549.2 432 534L432 528C432 476.5 414.6 429.1 385.5 391.3C408.1 376.6 435.1 368 464 368z"/></svg>
                <span class="ml-2">メンバーリスト</span>
              </a>
            </li>
            <li class="nav-item mb-4">
              <a class="nav-link active flex-sm align-items-center panel-link" aria-current="page" href="#" id="panel-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z"/></svg>
                <span class="ml-2">お知らせ</span>
              </a>
            </li>
            <li class="nav-item mb-4">
              <a class="nav-link active dropdown-toggle flex-sm align-items-center panel-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 64C241.7 64 256 78.3 256 96L256 128L384 128L384 96C384 78.3 398.3 64 416 64C433.7 64 448 78.3 448 96L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 96C192 78.3 206.3 64 224 64zM160 304L160 336C160 344.8 167.2 352 176 352L208 352C216.8 352 224 344.8 224 336L224 304C224 295.2 216.8 288 208 288L176 288C167.2 288 160 295.2 160 304zM288 304L288 336C288 344.8 295.2 352 304 352L336 352C344.8 352 352 344.8 352 336L352 304C352 295.2 344.8 288 336 288L304 288C295.2 288 288 295.2 288 304zM432 288C423.2 288 416 295.2 416 304L416 336C416 344.8 423.2 352 432 352L464 352C472.8 352 480 344.8 480 336L480 304C480 295.2 472.8 288 464 288L432 288zM160 432L160 464C160 472.8 167.2 480 176 480L208 480C216.8 480 224 472.8 224 464L224 432C224 423.2 216.8 416 208 416L176 416C167.2 416 160 423.2 160 432zM304 416C295.2 416 288 423.2 288 432L288 464C288 472.8 295.2 480 304 480L336 480C344.8 480 352 472.8 352 464L352 432C352 423.2 344.8 416 336 416L304 416zM416 432L416 464C416 472.8 423.2 480 432 480L464 480C472.8 480 480 472.8 480 464L480 432C480 423.2 472.8 416 464 416L432 416C423.2 416 416 423.2 416 432z"/></svg>
                <span class="ml-2">作成カレンダー</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @foreach($myCalendars as $myCal)
                <a class="dropdown-item" href="{{ route('calendars.show',['calendar_id' => $myCal->id]) }}">
                  {{ $calendar->name}}
                </a>
                @endforeach
              </div>
            </li>
            <li class="nav-item mb-4">
              <a class="nav-link active dropdown-toggle flex-sm align-items-center panel-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 64C206.3 64 192 78.3 192 96L192 128L160 128C124.7 128 96 156.7 96 192L96 240L544 240L544 192C544 156.7 515.3 128 480 128L448 128L448 96C448 78.3 433.7 64 416 64C398.3 64 384 78.3 384 96L384 128L256 128L256 96C256 78.3 241.7 64 224 64zM96 288L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 288L96 288z"/></svg>
                <span class="ml-2">参加カレンダー</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @forelse($joinedCalendars as $joined)
                <a class="dropdown-item" href="{{ route('calendars.show',['calendar_id' => $joined->id]) }}">
                  {{ $joined->name}}
                </a>
                @empty
                <a class="dropdown-item" href="#">参加カレンダーはまだありません。</a>
                @endforelse
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <div id="overlay-panel">
        <div class="d-flex align-items-center justify-content-between">
          <div id="panel-content"></div>
          <button id="close-panel" class="btn btn-sm btn-outline-dark disabled">×</button>
        </div>
        <!-- カード置き場 -->
        <div id="panel-cards" class="card-list m-3">
          <!-- ここに複数のカードが入る -->
        </div>
      </div>
      <!-- カレンダーメイン部分 -->
      <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
        <div class="flex-sm justify-content-between">
          <div id="monthHeader">
            <button type="submit" style="background-color: transparent; border: none;" id="prev" onclick="prev()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576C461.4 576 576 461.4 576 320zM335 199C344.4 189.6 359.6 189.6 368.9 199C378.2 208.4 378.3 223.6 368.9 232.9L281.9 319.9L368.9 406.9C378.3 416.3 378.3 431.5 368.9 440.8C359.5 450.1 344.3 450.2 335 440.8L231 337C221.6 327.6 221.6 312.4 231 303.1L335 199z"/></svg></button>
            <p class="month ml-3 mr-3" id="today-month"></p>
            <button type="submit" style="background-color: transparent; border: none;" id="next" onclick="next()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M64 320C64 461.4 178.6 576 320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320zM305 441C295.6 450.4 280.4 450.4 271.1 441C261.8 431.6 261.7 416.4 271.1 407.1L358.1 320.1L271.1 233.1C261.7 223.7 261.7 208.5 271.1 199.2C280.5 189.9 295.7 189.8 305 199.2L409 303C418.4 312.4 418.4 327.6 409 336.9L305 441z"/></svg></button>
          </div>

          <!-- 表示中のカレンダー -->
          <div class="d-flex align-items-center">
            <h4 class="mb-0">{{ $calendar->name }}</h4>
          </div>

          <div id="changeBtn">
            <button type="button" class="ml-2 mr-1 btn-change pt-2 pb-2">月表示</button>
            <button type="button" class="ml-2 mr-1 btn-change pt-2 pb-2">週表示</button>
              <select class="ml-2 mr-3 select-change pt-2 pb-2">
                <option value="" selected>メンバー表示切り替え</option>
                <option value="">
                <!-- 共有メンバーを選べるように -->
                たろう
                </option>
              </select>
          </div>
        </div>
        <div id="calendar" class="table-responsive mt-4"></div>
        <!-- 予定作成ボタン -->
        <a href="#">
          <div class="position-fixed rounded-circle text-white d-flex justify-content-center align-items-center" style="background: #3E6ED6; bottom: 2%; right: 2%; width: 55px; height: 55px;" data-toggle="modal" data-target="#postModal">
            <i class="fas fa-plus"></i>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!-- モーダル -->
  <!-- 検索モーダル -->
  <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content pre-scrollable">
        <div class="modal-header justify-content-center">
          <h5 class="modal-title" id="searchModalLabel">予定作成</h5>
          <button type="button" class="close position-absolute" style="right: 15px;" data-dismiss="modal" aria-label="閉じる">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form  method="POST">
          @csrf
          <div class="modal-body pr-5 pl-5">
            <div class="form-group d-flex justify-content-between">
              <div style="width: 12rem;">
                <label for="start-date">開始日</label>
                <input type="date" class="form-control" id="start-date">
              </div>
              <div style="width: 12rem;">
                <label for="end-date">終了日</label>
                <input type="date" class="form-control" id="end-date">
              </div>
            </div>

            <div class="form-group">
              <label for="category">カテゴリ</label>
                <select name="category" class="form-control">
                  <option value="">⛰️登山</option>
                  <option value="">😍デート</option>
                </select>
            </div>

            <div class="form-group">
              <label for="category">メンバー</label>
                <select name="category" class="form-control">
                  <option value="">たろう</option>
                  <option value="">みさき</option>
                </select>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">検索</button>
          </div>
        </form>
        <div class="modal-body pr-5 pl-5">
          <table class="table">
            <thead>
              <!-- 予定の日付 -->
              <tr>
                <th scope="col">日付</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <!-- 予定作成者アイコン -->
                  <button class="rounded-circle img-nonimg ml-3"><img src="" alt="" class=""></button>
                </td>
                <td>
                  <!-- カテゴリアイコン -->
                  <p>⛰️</p>
                </td>
                <td>
                  <!-- 予定タイトル -->
                  <p>富士山登る</p>
                </td>
                <td class="d-flex">
                  <!-- 予定の時間 -->
                  <p>10:00</p>
                  ~
                  <p>19:00</p>
                </td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <td>
                  <!-- 予定作成者アイコン -->
                  <button class="rounded-circle img-nonimg ml-3"><img src="" alt="" class=""></button>
                </td>
                <td>
                  <!-- カテゴリアイコン -->
                  <p>⛰️</p>
                </td>
                <td>
                  <!-- 予定タイトル -->
                  <p>富士山登る</p>
                </td>
                <td class="d-flex">
                  <!-- 予定の時間 -->
                  <p>10:00</p>
                  ~
                  <p>19:00</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- 投稿モーダル -->
  <div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h5 class="modal-title" id="searchModalLabel">予定作成</h5>
        <button type="button" class="close position-absolute" style="right: 15px;" data-dismiss="modal" aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  method="POST">
        @csrf
        <div class="modal-body pr-5 pl-5">
          <div class="form-group">
            <label for="category">タイトル</label>
            <input type="text" class="form-control">
          </div>

          <div class="form-group">
            <div class="d-flex justify-content-between align-items-center" >
              <label for="start-date">開始</label>
              <input type="date" class="form-control" id="start-date" style="width: 10rem;">
              <input type="time" class="form-control" style="width: 10rem;">
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <label for="end-date">終了</label>
              <input type="date" class="form-control" id="end-date" style="width: 10rem;">
              <input type="time" class="form-control" style="width: 10rem;">
            </div>

            <div class="d-flex align-items-center mt-2 mb-3">
              <input type="checkbox" class="mr-2" aria-label="Checkbox for following text input" id="fullday">
              <label for="fullday" class="mb-0">終日</label>
            </div>
          </div>

          <div class="form-group">
            <label for="category">カテゴリ</label>
            <select name="category" class="form-control">
              <option value="">⛰️登山</option>
              <option value="">😍デート</option>
            </select>
          </div>

          <div class="form-group">
            <label for="place">場所</label>
            <!-- ここでAPI連携 -->
            <input type="text" id="place-input" class="form-control">
          </div>

          <div class="form-group">
            <label for="comment">コメント／メモ</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div> <!-- modal-body end -->

        <div class="d-flex justify-content-center mb-3">
          <button type="submit" class="btn btn-primary">投稿</button>
        </div>
      </form>
    </div>
  </div>
</div>


  <!-- カテゴリ登録モーダル -->
  <div class="modal fade" id="categoryAddModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content pre-scrollable">
        <div class="modal-header justify-content-center">
          <h5 class="modal-title" id="searchModalLabel">カテゴリ登録</h5>
          <button type="button" class="close position-absolute" style="right: 15px;" data-dismiss="modal" aria-label="閉じる">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form  method="POST">
          @csrf
          <div class="modal-body pr-5 pl-5">
            <div class="form-group">
              <label for="categoryName">カテゴリ名</label>
              <input type="text" class="form-control" id="categoryName">
            </div>

            <div class="form-group">
              <label for="emoji">カテゴリアイコン</label>
              <input type="text" class="form-control" id="emoji">
            </div>

            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">追加</button>
            </div>
          </div>
        </form>
        <div class="modal-body pr-5 pl-5">
          <div class="container">
            <div class="row" style="row-gap: 0.5rem; column-gap: 1rem;">
              <div class="col p-3 rounded-lg">⛰️＋登山</div>
              <div class="col p-3 rounded-lg">😍＋デート</div>
              <div class="w-100"></div>
              <div class="col p-3 rounded-lg">🍽️＋外食</div>
              <div class="col p-3 rounded-lg">🍖＋バーベキュー</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>

@endsection
@section('scripts')
<script>

document.addEventListener('DOMContentLoaded', function() {
  // 曜日の配列（日曜はじまり）
  const week = ["日", "月", "火", "水", "木", "金", "土"];

  // 今日の日付を取得
  const today = new Date();

  // 表示中のカレンダーの基準日（最初は当月の1日をセット）
  let showDate = new Date(today.getFullYear(), today.getMonth(), 1);

  // 初期表示
  showProcess(showDate);

  // === イベントリスナーでボタンに動きをつける ===
  document.getElementById('prev').addEventListener('click', function() {
    showDate.setMonth(showDate.getMonth() - 1); // 月を1つ戻す
    showProcess(showDate);
  });

  document.getElementById('next').addEventListener('click', function() {
    showDate.setMonth(showDate.getMonth() + 1); // 月を1つ進める
    showProcess(showDate);
  });

  // カレンダーを表示する関数
  function showProcess(date) {
    let year = date.getFullYear();
    let month = date.getMonth(); // 0〜11で返るので +1 が必要

    // 年と月を表示（スペースに &nbsp; を使う）
    document.querySelector('#today-month').innerHTML = year + "年&nbsp;" + (month + 1) + "月";

    // カレンダーを作成
    let calendar = createProcess(year, month);
    document.querySelector('#calendar').innerHTML = calendar;
  }

  // 実際にカレンダーの表を作る関数
  function createProcess(year, month) {
    let calendar = "<table class='col-md-12 table-light'><tr>";

    // 曜日をヘッダーに表示
    for (let i = 0; i < week.length; i++) {
      calendar += "<th>" + week[i] + "</th>";
    }
    calendar += "</tr>";

    let count = 0;
    let startDayOfWeek = new Date(year, month, 1).getDay(); // その月の1日の曜日
    let endDate = new Date(year, month + 1, 0).getDate();   // その月の末日
    let lastMonthEndDate = new Date(year, month, 0).getDate(); // 前月の末日
    let row = Math.ceil((startDayOfWeek + endDate) / week.length); // 行数

    // 行ごとに日付を埋める
    for (let i = 0; i < row; i++) {
      calendar += "<tr>";

      for (let j = 0; j < week.length; j++) {
        if (i === 0 && j < startDayOfWeek) {
          // 前月の残りを表示
          calendar += "<td class='disabled'>" + (lastMonthEndDate - startDayOfWeek + j + 1) + "</td>";
        } else if (count >= endDate) {
          // 次月の日付を表示
          count++;
          calendar += "<td class='disabled'>" + (count - endDate) + "</td>";
        } else {
          // 当月の日付を表示
          count++;
          if (year === today.getFullYear() && month === today.getMonth() && count === today.getDate()) {
            // 今日の日付にだけクラス today をつける
            calendar += "<td><div class='today'>" + count + "</div></td>";
          } else {
            calendar += "<td>" + count + "</td>";
          }
        }
      }

      calendar += "</tr>";
    }

    calendar += "</table>";
    return calendar;
  }
});

document.addEventListener("DOMContentLoaded", () => {
const panelContent = document.getElementById("panel-content");
const panelCards = document.getElementById("panel-cards");
const rightPanel = document.getElementById("overlay-panel");

  function setPanelPosition() {
    const sidebarWidth = sidebar.getBoundingClientRect().width;
    rightPanel.style.left = sidebarWidth + "px";
  }

  // 初期配置
  setPanelPosition();

  // ウィンドウリサイズ時も追従
  window.addEventListener("resize", setPanelPosition);

  ["panel-new", "panel-member", "panel-info"].forEach(id => {
  const link = document.getElementById(id);
  if (!link) return;

  link.addEventListener("click", e => {
    e.preventDefault();
    panelCards.innerHTML = ""; // クリックするたびに中身をリセット

    if (id === "panel-new") {
      panelContent.innerHTML = `<h5 class="mb-0 font-weight-bold">新着</h5>`;
      // 仮の新着データ
      const posts = [
        { title: "予定1", content: "富士山登山" },
        { title: "予定2", content: "飲み会" }
      ];
      posts.forEach(post => {
        panelCards.innerHTML += `
          <div class="card m-2">
            <div class="card-body">
              <h5 class="card-title">${post.title}</h5>
              <p class="card-text">${post.content}</p>
            </div>
          </div>`;
      });
    } else if (id === "panel-member") {
      panelContent.innerHTML = `<h5 class="mb-0 font-weight-bold">メンバーリスト</h5>`;
      panelCards.innerHTML = `
        <div class="card m-2">
          <div class="card-body">
            <input type="text" class="form-control mb-2" placeholder="メンバー検索">
            <ul>
              <li>ユーザーA</li>
              <li>ユーザーB</li>
            </ul>
            <button class="btn btn-sm btn-primary mt-2">招待リンクを発行</button>
          </div>
        </div>`;
    } else if (id === "panel-info") {
      panelContent.innerHTML = `<h5 class="mb-0 font-weight-bold">お知らせ</h5>`;
      const infos = [
        { title: "メンテナンス", content: "9/30 23:00からシステムメンテナンスがあります。" },
        { title: "新機能", content: "新しいカレンダー機能が追加されました！" }
      ];
      infos.forEach(info => {
        panelCards.innerHTML += `
          <div class="card m-2">
            <div class="card-body">
              <h5 class="card-title">${info.title}</h5>
              <p class="card-text">${info.content}</p>
            </div>
          </div>`;
      });
    }

    rightPanel.classList.add("active","scrollable");
  });
});

  // 閉じるボタン
  document.getElementById("close-panel").addEventListener("click", () => {
    rightPanel.classList.remove("active");
  });
});
</script>
