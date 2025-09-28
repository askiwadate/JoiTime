@extends('layouts/layout')

@section('content')

<section style="background-color: #FFFDF8; min-height: calc(100vh - 57px);">
  <div class="container-fluid">
    <div class="row w-100">
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light collapse h-100">
        <!-- サイドバーコンテンツ -->
        <div class="position-sticky pt-md-5" style="background-color: #FFFDF8; padding: 0rem 0.78rem 0.78rem 0.78rem;">
          <ul class="nav flex-column align-items-center">
            <li class="nav-item mb-4">
              <a class="nav-link active flex-sm align-items-center" aria-current="page" href="#" data-toggle="modal" data-target="#categoryAddModal">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Pro v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2025 Fonticons, Inc.--><path d="M238.9 336C249.6 336 259.6 341.3 265.5 350.2L277.3 368L304 368C330.5 368 352 389.5 352 416L352 528C352 554.5 330.5 576 304 576L112 576C85.5 576 64 554.5 64 528L64 416C64 389.5 85.5 368 112 368L138.7 368L150.5 350.2C156.4 341.3 166.4 336 177.1 336L238.8 336zM517.5 324C523.1 319.1 531.4 318.7 537.4 323.1C543.4 327.5 545.7 335.5 542.7 342.4L504.3 432L560 432C566.7 432 572.6 436.1 575 442.4C577.4 448.7 575.6 455.7 570.6 460.1L442.6 572.1C437 577 428.7 577.4 422.7 573C416.7 568.6 414.4 560.6 417.4 553.7L455.9 464L400.1 464C393.4 464 387.5 459.9 385.1 453.6C382.7 447.3 384.5 440.3 389.5 435.9L517.5 323.9zM208 424C181.5 424 160 445.5 160 472C160 498.5 181.5 520 208 520C234.5 520 256 498.5 256 472C256 445.5 234.5 424 208 424zM547.8 64.4C554.3 63.3 560.9 64.8 566.3 68.8C572.4 73.3 576 80.5 576 88L576 240L575.7 244.9C572.4 269.1 545.2 288 512 288C476.7 288 448 266.5 448 240C448 213.5 476.7 192 512 192C517.5 192 522.9 192.6 528 193.6L528 144.3L416 177.9L416 288.1L415.7 293C412.4 317.2 385.2 336.1 352 336.1C316.7 336.1 288 314.6 288 288.1C288 261.6 316.7 240.1 352 240.1C357.5 240.1 362.9 240.7 368 241.7L368 136C368 125.4 375 116 385.1 113L545.1 65L547.8 64.4zM252.9 64C290 64 320 94 320 131.1L320 137.2C320 193.3 244.8 249.3 209.7 272.5C198.9 279.6 185.1 279.6 174.3 272.5C139.2 249.4 64 193.3 64 137.2L64 131.1C64 94 94 64 131.1 64C152.2 64 172 73.9 184.7 90.8L192 100.6L199.3 90.8C212 73.9 231.8 64 252.9 64z"/></svg>
                <span class="ml-2">カテゴリ</span>
              </a>
            </li>
            <li class="nav-item mb-4">
              <a class="nav-link active flex-sm align-items-center panel-link" aria-current="page" href="#" id="panel-member">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M96 192C96 130.1 146.1 80 208 80C269.9 80 320 130.1 320 192C320 253.9 269.9 304 208 304C146.1 304 96 253.9 96 192zM32 528C32 430.8 110.8 352 208 352C305.2 352 384 430.8 384 528L384 534C384 557.2 365.2 576 342 576L74 576C50.8 576 32 557.2 32 534L32 528zM464 128C517 128 560 171 560 224C560 277 517 320 464 320C411 320 368 277 368 224C368 171 411 128 464 128zM464 368C543.5 368 608 432.5 608 512L608 534.4C608 557.4 589.4 576 566.4 576L421.6 576C428.2 563.5 432 549.2 432 534L432 528C432 476.5 414.6 429.1 385.5 391.3C408.1 376.6 435.1 368 464 368z"/></svg>
                <span class="ml-2">メンバーリスト</span>
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
                  {{ $myCal->name}}
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
        <div id="calendar"></div>
        <!-- class="table-responsive mt-4" -->
        <!-- 予定作成ボタン -->
        <a href="#">
          <div class="position-fixed rounded-circle text-white d-flex justify-content-center align-items-center" style="background: #3E6ED6; bottom: 2%; right: 2%; width: 55px; height: 55px; z-index: 2000;" data-toggle="modal" data-target="#postModal">
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
              <label for="member">メンバー</label>
                <select name="member" class="form-control">
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
        <form id="scheduleForm" method="POST" action="{{ route('schedules.store',$calendar->id) }}">
          @csrf
          <input type="hidden" name="calendar_id" value="{{ $calendar->id }}">
          <div class="modal-body pr-5 pl-5">
            <div class="form-group">
              <label for="category">タイトル</label>
              <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
              <div class="d-flex justify-content-between align-items-center" >
                <label for="start-date">開始</label>
                <input type="date" class="form-control" name="start_date" id="start-date" style="width: 10rem;">
                <input type="time" class="form-control" name="start_time" style="width: 10rem;">
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <label for="end-date">終了</label>
                <input type="date" class="form-control" name="end_date" id="end-date" style="width: 10rem;">
                <input type="time" class="form-control" name="end_time" style="width: 10rem;">
              </div>

              <div class="d-flex align-items-center mt-2 mb-3">
                <input type="checkbox" class="mr-2" aria-label="Checkbox for following text input" id="fullday" name="all_day" value="1">
                <label for="fullday" class="mb-0">終日</label>
              </div>
            </div>

            <div class="form-group">
              <label for="category">カテゴリ</label>
              <select name="category_id" class="form-control">
                <option>選択してください</option>
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->emoji }}{{ $cat->category_name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="place">場所</label>
              <!-- ここでAPI連携 -->
              <input id="placeInput" class="form-control" placeholder="場所を入力" type="text" name="place_name">
              <input type="hidden" id="place_address" name="place_address">
              <input type="hidden" id="latitude" name="latitude">
              <input type="hidden" id="longitude" name="longitude">
            </div>

            <div class="form-group">
              <label for="comment">コメント／メモ</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
            </div>
          </div> <!-- modal-body end -->

          <div class="d-flex justify-content-center mb-3">
            <button type="submit" class="btn btn-primary" id="add">投稿</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- 詳細モーダル -->
  <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header justify-content-between">
        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title"><span id= "detailTitle"></h5>
        <div class="dropdown">
          <button class="btn btn-link" type="button" id="detailOptions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            &#x22EE;
          </button>
          <div class="dropdown-menu" aria-labelledby="detailOptions">
            <a class="dropdown-item" href="#" id="editScheduleBtn">編集する</a>
            <div class="position-relative">
              <a class="dropdown-item text-danger" href="#" id="deleteScheduleBtn">削除する</a>

              <!-- 二段階削除（削除ボタン直下に表示） -->
              <div id="deleteConfirmGroup" class="mt-2" style="display:none; padding-left:1rem;">
                <span>本当に削除しますか？</span>
                <div class="mt-1">
                  <button class="btn btn-sm btn-danger" id="confirmDeleteBtn">削除する</button>
                  <button class="btn btn-sm btn-secondary" id="cancelDeleteBtn">キャンセル</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body pr-5 pl-5">
        <p><strong>カテゴリ:</strong> <span id="detailCategory"></span></p>
        <p><strong>開始:</strong> <span id="detailStart"></span></p>
        <p><strong>終了:</strong> <span id="detailEnd"></span></p>
        <p><strong>場所:</strong> <span id="detailPlace"></span></p>
        <p><strong>コメント:</strong> <span id="detailComment"></span></p>
      </div>

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
        <form  method="POST" action="{{ route('categories.store',$calendar->id) }}">
          @csrf
          <div class="modal-body pr-5 pl-5">
            <div class="form-group">
              <label for="categoryName">カテゴリ名</label>
              <input type="text" class="form-control" id="categoryName" name="category_name" placeholder="例：登山">
            </div>

            <div class="form-group">
              <label for="emoji">カテゴリアイコン</label>
              <input type="text" class="form-control" id="emoji" name="emoji" placeholder="例：⛰️">
            </div>

            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">追加</button>
            </div>
          </div>
        </form>
        <div class="modal-body pr-5 pl-5">
          <div class="container">
            <div class="row" style="row-gap: 0.5rem; column-gap: 1rem;">
            @foreach($categories as $cat)
              <div class="col p-3 rounded-lg">{{ $cat->emoji }}{{ $cat->category_name }}</div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>

@endsection
@section('scripts')
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDn3dwzZ7uXEKObEJXwPV2G4MU4XX6IHJQ&loading=async&libraries=places&callback=initMap">
</script>
<script>
// fullcalendar
  document.addEventListener( 'DOMContentLoaded', () => {
    const calendarEl = document.getElementById( 'calendar' );
    const calendar = new FullCalendar.Calendar( calendarEl,{
      initialView: 'dayGridMonth',
      locale: 'ja',
      height: 'auto',
      headerToolbar: {
        left: 'prev,title,next',
        right: 'dayGridMonth,dayGridWeek',
      },
      buttonText: {
        month: '月表示',
        week: '週表示',
      },
      events: '/calendars/1/schedules/json', // ← カレンダーID1のデータを取得
      eventClick: function(info) {
            // モーダルにデータをセット
            const schedule = info.event.extendedProps;

            document.getElementById('detailTitle').innerText = info.event.title;
            document.getElementById('detailCategory').innerText = schedule.category || '-';
            document.getElementById('detailStart').innerText = info.event.start.toLocaleString();
            document.getElementById('detailEnd').innerText = info.event.end ? info.event.end.toLocaleString() : '-';
            document.getElementById('detailPlace').innerText = schedule.place_name || '-';
            document.getElementById('detailComment').innerText = schedule.comment || '-';

            // モーダルを表示
            $('#detailModal').modal('show');
        }
    });
  
    calendar.render();

    // fc-toolbar-chunk の子要素に対して flex を適用
    const chunks = document.querySelectorAll('.fc-toolbar-chunk');
    chunks.forEach(chunk => {
      Array.from(chunk.children).forEach(child => {
        child.style.display = 'flex';
        child.style.justifyContent = 'space-between';
        child.style.alignItems = 'center';
      });
    });

    // prevボタン
    const prevBtn = document.querySelector('.fc-prev-button');
    if (prevBtn) {
      prevBtn.style.marginRight = '0.75rem';
      prevBtn.style.backgroundColor = '#3E6ED6';
      prevBtn.style.width = '40px';
      prevBtn.style.height = '40px';
      prevBtn.style.borderRadius = '50%';
      prevBtn.style.border = 'none';
      prevBtn.style.alignItems = 'center';
    }

    // nextボタン
    const nextBtn = document.querySelector('.fc-next-button');
    if (nextBtn) {
      nextBtn.style.marginLeft = '0.75rem';
      nextBtn.style.backgroundColor = '#3E6ED6';
      nextBtn.style.width = '40px';
      nextBtn.style.height = '40px';
      nextBtn.style.borderRadius = '50%';
      nextBtn.style.border = 'none';
      nextBtn.style.alignItems = 'center';
    }
  } );

  //api
  function initAutocomplete() {
    const input = document.getElementById('placeInput');
    const autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', () => {
        const place = autocomplete.getPlace();
        if (!place.geometry) return;

        // 隠しフィールドに値をセット
        document.getElementById('place_address').value = place.formatted_address;
        document.getElementById('latitude').value = place.geometry.location.lat();
        document.getElementById('longitude').value = place.geometry.location.lng();
    });
}

// モーダル表示時に初期化
$('#postModal').on('shown.bs.modal', function () {
    initAutocomplete();
});

  // -------------------------------
  // サイドパネル JS（既存のまま）
  // -------------------------------
  document.addEventListener("DOMContentLoaded", () => {
    const panelContent = document.getElementById("panel-content");
    const panelCards = document.getElementById("panel-cards");
    const rightPanel = document.getElementById("overlay-panel");

    function setPanelPosition() {
      const sidebarWidth = sidebar.getBoundingClientRect().width;
      rightPanel.style.left = sidebarWidth + "px";
    }
    setPanelPosition();
    window.addEventListener("resize", setPanelPosition);

    ["panel-new", "panel-member", "panel-info"].forEach(id => {
      const link = document.getElementById(id);
      if (!link) return;
      link.addEventListener("click", e => {
        e.preventDefault();
        panelCards.innerHTML = "";
        if (id === "panel-member") {
          panelContent.innerHTML = `<h5 class="mb-0 font-weight-bold">メンバーリスト</h5>`;
          panelCards.innerHTML = `<div class="card m-2"><div class="card-body"><input type="text" class="form-control mb-2" placeholder="メンバー検索"><ul><li>ユーザーA</li><li>ユーザーB</li></ul><button class="btn btn-sm btn-primary mt-2">招待リンクを発行</button></div></div>`;
        } 
        rightPanel.classList.add("active","scrollable");
      });
    });

    document.getElementById("close-panel").addEventListener("click", () => {
      rightPanel.classList.remove("active");
    });
  });
</script>
@endsection
