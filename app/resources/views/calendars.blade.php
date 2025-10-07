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
              <a class="nav-link active flex-sm align-items-center panel-link" data-toggle="modal" data-target="#createCalendar">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 64C241.7 64 256 78.3 256 96L256 128L384 128L384 96C384 78.3 398.3 64 416 64C433.7 64 448 78.3 448 96L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 96C192 78.3 206.3 64 224 64zM320 256C306.7 256 296 266.7 296 280L296 328L248 328C234.7 328 224 338.7 224 352C224 365.3 234.7 376 248 376L296 376L296 424C296 437.3 306.7 448 320 448C333.3 448 344 437.3 344 424L344 376L392 376C405.3 376 416 365.3 416 352C416 338.7 405.3 328 392 328L344 328L344 280C344 266.7 333.3 256 320 256z"/></svg>
                <span class="ml-2">カレンダー追加</span>
              </a>
            </li>
            <li class="nav-item mb-4">
              <a class="nav-link active dropdown-toggle flex-sm align-items-center panel-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 64C241.7 64 256 78.3 256 96L256 128L384 128L384 96C384 78.3 398.3 64 416 64C433.7 64 448 78.3 448 96L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 96C192 78.3 206.3 64 224 64zM160 304L160 336C160 344.8 167.2 352 176 352L208 352C216.8 352 224 344.8 224 336L224 304C224 295.2 216.8 288 208 288L176 288C167.2 288 160 295.2 160 304zM288 304L288 336C288 344.8 295.2 352 304 352L336 352C344.8 352 352 344.8 352 336L352 304C352 295.2 344.8 288 336 288L304 288C295.2 288 288 295.2 288 304zM432 288C423.2 288 416 295.2 416 304L416 336C416 344.8 423.2 352 432 352L464 352C472.8 352 480 344.8 480 336L480 304C480 295.2 472.8 288 464 288L432 288zM160 432L160 464C160 472.8 167.2 480 176 480L208 480C216.8 480 224 472.8 224 464L224 432C224 423.2 216.8 416 208 416L176 416C167.2 416 160 423.2 160 432zM304 416C295.2 416 288 423.2 288 432L288 464C288 472.8 295.2 480 304 480L336 480C344.8 480 352 472.8 352 464L352 432C352 423.2 344.8 416 336 416L304 416zM416 432L416 464C416 472.8 423.2 480 432 480L464 480C472.8 480 480 472.8 480 464L480 432C480 423.2 472.8 416 464 416L432 416C423.2 416 416 423.2 416 432z"/></svg>
                <span class="ml-2">カレンダー</span>
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
              <a class="nav-link active flex-sm align-items-center panel-link" data-toggle="modal" data-target="#UserControlModal">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M463 448.2C440.9 409.8 399.4 384 352 384L288 384C240.6 384 199.1 409.8 177 448.2C212.2 487.4 263.2 512 320 512C376.8 512 427.8 487.3 463 448.2zM64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320zM320 336C359.8 336 392 303.8 392 264C392 224.2 359.8 192 320 192C280.2 192 248 224.2 248 264C248 303.8 280.2 336 320 336z"/></svg>
                <span class="ml-2">ユーザー設定</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <div id="overlay-panel">
        <div class="d-flex align-items-center justify-content-between">
          <div id="panel-content"></div>
          <button id="close-panel" class="btn btn-sm btn-outline-dark disabled">×</button>
        </div>
          <div id="panel-cards" class="card-list m-3">
        </div>
      </div>
      <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
        <!-- fullcalendar -->
        <div id="calendar"></div>
        <!-- 予定作成ボタン -->
        <a href="#">
          <div class="position-fixed rounded-circle text-white d-flex justify-content-center align-items-center" style="background: #ED665E; bottom: 4%; right: 2%; width: 55px; height: 55px; z-index: 2000;" data-toggle="modal" data-target="#postModal">
            <i class="fas fa-plus"></i>
          </div>
        </a>
      </div>
    </div>
  </div>


  <!-- モーダル -->
  <!-- ユーザー設定モーダル -->
  <div class="modal fade" id="UserControlModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h5 class="modal-title">ユーザー情報</h5>
          <button type="button" class="close position-absolute" style="right: 15px;" data-dismiss="modal">&times;</button>
        </div>

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="modal-body">
            <div class="text-center my-3">
              @if(Auth::user()->icon)
              <img src="{{ asset('storage/' . Auth::user()->icon) }}" alt="アイコン" class="rounded-circle" width="100" height="100">
              @else
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" style="width: 10rem;"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M463 448.2C440.9 409.8 399.4 384 352 384L288 384C240.6 384 199.1 409.8 177 448.2C212.2 487.4 263.2 512 320 512C376.8 512 427.8 487.3 463 448.2zM64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320zM320 336C359.8 336 392 303.8 392 264C392 224.2 359.8 192 320 192C280.2 192 248 224.2 248 264C248 303.8 280.2 336 320 336z"/></svg>
              @endif
            </div>
            
            <div class="form-group pr-5 pl-5 mb-4">
              <input type="file" name="icon" class="form-control-file">
            </div>
            <div class="form-group d-flex justify-content-between align-items-center pr-5 pl-5">
              <p class="mb-0 pr-1">ユーザー名</p>
              <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="form-control" style="width: 75%;" required>
            </div>

            <div class="form-group d-flex justify-content-between align-items-center pr-5 pl-5">
              <p class="mb-0 pr-1">生年月日</p>
              <input type="date" name="birthday" value="{{ old('birthday', Auth::user()->birthday) }}" class="form-control" style="width: 75%;">
            </div>

            <div class="d-flex justify-content-center mb-3 mt-4">
              <button type="submit" class="btn btn-submit">保存</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- ユーザー設定モーダルここまで -->

  <!-- カレンダー追加用モーダル -->
  <div class="modal fade" id="createCalendar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="{{ route('calendars.store') }}" method="POST">
        @csrf
        <div class="modal-content">
          @if($errors->any())
          <div class="alert alert-danger modal-body">
            <ul class="mb-0">
              @foreach($errors->all() as $message)
              <li>{{ $message }}</li>
              @endforeach
            </ul>
          </div>
          @endif
        <div class="modal-header justify-content-center">
          <button type="button" class="close position-absolute" style="right: 15px;" data-dismiss="modal" aria-label="閉じる">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="createCalendarLabel">カレンダー新規作成</h5>
        </div>
          <div class="modal-body">
            <input type="text" name="calendar_title" id="newCalendarName" class="form-control" placeholder="カレンダー名" required>
          </div>
          <div class="d-flex justify-content-center mb-3">
            <button type="submit" class="btn btn-primary">作成</button>
          </div>
        </div>
      </form>
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
        <form id="scheduleForm" method="POST" action="{{ route('schedules.store',$calendar->id) }}"  class="pre-scrollable">
          @csrf
          <input type="hidden" name="calendar_id" value="{{ $calendar->id }}">
          <div class="modal-body pr-5 pl-5">
          @if($errors->scheduleForm->any())
          <div class="alert alert-danger modal-body">
            <ul class="mb-0">
              @foreach($errors->scheduleForm->all() as $message)
              <li>{{ $message }}</li>
              @endforeach
            </ul>
          </div>
          @endif
            <div class="form-group">
              <label for="title">タイトル<span class="text-danger">*</span></label>
              <input type="text" name="title" value="{{ old('title') }}" class="form-control">
            </div>

            <div class="form-group">
              <div class="d-flex justify-content-between align-items-center" >
                <label for="start-date" class="mb-0">開始<span class="text-danger">*</span></label>
                <input type="date" class="form-control" value="{{ old('start_date') }}" name="start_date" id="start-date" style="width: 10rem;">
                <input type="time" class="form-control" value="{{ old('start_time') }}" name="start_time" style="width: 10rem;">
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <label for="end-date" class="mb-0">終了<span class="text-danger">*</span></label>
                <input type="date" class="form-control" value="{{ old('end_date') }}" name="end_date" id="end-date" style="width: 10rem;">
                <input type="time" class="form-control" value="{{ old('end_time') }}" name="end_time" style="width: 10rem;">
              </div>

              <div class="d-flex align-items-center mt-2 mb-3">
                <input type="checkbox" class="mr-2" aria-label="Checkbox for following text input" id="fullday" name="all_day" value="1">
                <label for="fullday" class="mb-0">終日</label>
              </div>
            </div>

            <div class="form-group">
              <label for="category">カテゴリ<span class="text-danger">*</span></label>
              <select name="category_id" class="form-control">
                <option>選択してください</option>
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ?'selected' : '' }}>{{ $cat->emoji }}{{ $cat->category_name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="place">場所</label>
              <!-- ここでAPI連携 -->
              <input id="post-placeInput" class="form-control" placeholder="場所を入力" type="text" name="place_name">
              <input type="hidden" id="post_place_address" name="place_address">
              <input type="hidden" id="post_latitude" name="latitude">
              <input type="hidden" id="post_longitude" name="longitude">
            </div>

            <div class="form-group">
              <label for="comment">コメント／メモ</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
            </div>
          </div> 

          <div class="d-flex justify-content-center mb-3">
            <button type="submit" class="btn btn-primary" id="add">投稿</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- 投稿モーダルここまで -->

  <!-- 詳細モーダル -->
  <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header justify-content-between">
        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title"><span id="detailTitle"></h5>
        <!-- 三点リーダー -->
        <div class="dropdown">
          <button class="btn btn-link p-0 mr-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            &#x22EE;
          </button>
          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#" id="editScheduleBtn" data-toggle="modal" data-target="#editModal">編集する</a>
            <form id="deleteScheduleForm" method="POST" onsubmit="return confirm('本当に削除しますか？');">
              @csrf
              @method('DELETE')
              <button type="submit" class="dropdown-item">削除する</button>
            </form>
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
<!-- 詳細モーダルここまで -->



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
            @if($errors->categoryForm->any())
            <div class="alert alert-danger modal-body">
              <ul class="mb-0">
                @foreach($errors->categoryForm->all() as $message)
                <li>{{ $message }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <div class="form-group">
              <label for="categoryName">カテゴリ名<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="categoryName" name="category_name" placeholder="例：登山">
            </div>

            <div class="form-group">
              <label for="emoji">カテゴリアイコン<span class="text-danger">*</span></label>
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
              <div class="w-100"></div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <!-- カテゴリ登録モーダルここまで -->

  <!-- 編集モーダル -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h5 class="modal-title">予定編集</h5>
          <button type="button" class="close position-absolute" style="right: 15px;" data-dismiss="modal" aria-label="閉じる">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="editScheduleForm" method="POST" data-event-id="">
          @csrf
          @method('PUT')
          <input type="hidden" name="calendar_id" value="{{ $calendar->id }}">
          <div class="modal-body pr-5 pl-5">
            <div class="form-group">
              <label for="category">タイトル</label>
              <input type="text" id="editTitle" name="title" class="form-control" required>
            </div>

            <div class="form-group">
              <div class="d-flex justify-content-between align-items-center" >
                <label for="start-date">開始</label>
                <input type="date" class="form-control" name="start_date" id="edit-start-date" style="width: 10rem;">
                <input type="time" class="form-control" name="start_time" style="width: 10rem;" id="edit-start-time">
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <label for="end-date">終了</label>
                <input type="date" class="form-control" name="end_date" id="edit-end-date" style="width: 10rem;">
                <input type="time" class="form-control" name="end_time" style="width: 10rem;" id="edit-end-time">
              </div>

              <div class="d-flex align-items-center mt-2 mb-3">
                <input type="checkbox" class="mr-2" id="edit-fullday" name="all_day" value="1">
                <label for="fullday" class="mb-0">終日</label>
              </div>
            </div>

            <div class="form-group">
              <label for="category">カテゴリ</label>
              <select name="category_id" class="form-control" id="editCategory">
                <option>選択してください</option>
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->emoji }}{{ $cat->category_name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="place">場所</label>
              <!-- ここでAPI連携 -->
              <input id="edit-placeInput" class="form-control" placeholder="場所を入力" type="text" name="place_name">
              <input type="hidden" id="edit_place_address" name="place_address">
              <input type="hidden" id="edit_latitude" name="latitude">
              <input type="hidden" id="edit_longitude" name="longitude">
            </div>

            <div class="form-group">
              <label for="comment">コメント／メモ</label>
              <textarea class="form-control" id="editComment" rows="3" name="comment"></textarea>
            </div>
          </div>

          <div class="d-flex justify-content-center mb-3">
            <button type="submit" class="btn btn-primary" id="add">編集</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- 編集モーダルここまで -->
</section>

@endsection
@section('scripts')
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDn3dwzZ7uXEKObEJXwPV2G4MU4XX6IHJQ&loading=async&libraries=places">
</script>
<script>
@if($errors->categoryForm->any())
  $(document).ready(function() {
    $('#categoryAddModal').modal('show');
  });
@endif

@if($errors->scheduleForm->any())
  $(document).ready(function() {
    $('#postModal').modal('show');
  });
@endif
</script>
<script>
// fullcalendar
document.addEventListener('DOMContentLoaded', () => {
  const calendarEl = document.getElementById('calendar');
  const calendarId = @json($calendar->id);
  
  let myCalendarName = @json($calendar->name);
  let currentEventId = null;

  const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: 'ja',
    height: 'auto',
    headerToolbar: {
      left: 'prev,title,next',
      center: 'myCalendarName',
      right: 'dayGridMonth,dayGridWeek',
    },
    customButtons:{
      myCalendarName:{
        text:myCalendarName,
      }
    },
    buttonText: {
      month: '月表示',
      week: '週表示',
    },
    eventDidMount: function(info) {
    if (info.event.allDay) {
      // 終日イベントの色
      info.el.style.backgroundColor = '#ED665E';
      info.el.style.borderColor = '#ED665E';
      info.el.style.color = 'white';
    } else {
      // 時間指定イベントの色
      info.el.style.marginRight = '0.5rem';
    }
    },
    events: `/calendars/${calendarId}/schedules/json`,

    eventClick: function(info) {
    const schedule = info.event.extendedProps;
    currentEventId = info.event.id; // 編集用に保持

    // --- 詳細モーダルにセット ---
    document.getElementById('detailTitle').innerText = info.event.title;
    document.getElementById('detailCategory').innerText = schedule.category_name || '-';

    if (schedule.all_day) {
      // 終日なら日付だけ表示
      document.getElementById('detailStart').innerText = info.event.start.toLocaleDateString();
      if (info.event.end) {
        const end = new Date(info.event.end);
        end.setDate(end.getDate()-1)
        document.getElementById('detailEnd').innerText = end.toLocaleDateString();
      } else {
        document.getElementById('detailEnd').innerText = info.event.start.toLocaleDateString();
      }
    } else {
      // 通常イベント
      document.getElementById('detailStart').innerText = info.event.start.toLocaleString();
      document.getElementById('detailEnd').innerText = info.event.end ? info.event.end.toLocaleString() : '-';
    }

    document.getElementById('detailPlace').innerText = schedule.place_name || '-';
    document.getElementById('detailComment').innerText = schedule.comment || '-';

    // 削除フォーム
    const deleteForm = document.getElementById('deleteScheduleForm');
    deleteForm.action = `/schedules/${info.event.id}/delete`;

    // --- 編集フォームにセット ---
    const editForm = document.getElementById('editScheduleForm');
    editForm.action = `/schedules/${info.event.id}`;
    editForm.dataset.eventId = info.event.id;

    document.getElementById('editTitle').value = info.event.title;
    document.getElementById('editCategory').value = schedule.category_id || '';

    if (schedule.all_day) {
      // 終日なら日付だけセット
      const start = new Date(info.event.start);
      start.setDate(start.getDate()+1);
      document.getElementById('edit-start-date').value = start.toISOString().slice(0,10);

      if (info.event.end) {
        const end = new Date(info.event.end);
        document.getElementById('edit-end-date').value = end.toISOString().slice(0,10);
      } else {
        document.getElementById('edit-end-date').value = start.toISOString().slice(0,10);
      }

      // 時間は空欄に
      document.getElementById('edit-start-time').value = '';
      document.getElementById('edit-end-time').value = '';
    } else {
      // 通常イベント
      if(info.event.start){
        const start = new Date(info.event.start);
        document.getElementById('edit-start-date').value = start.toISOString().slice(0,10);
        document.getElementById('edit-start-time').value = start.toTimeString().slice(0,5);
      }

      if(info.event.end){
        const end = new Date(info.event.end);
        document.getElementById('edit-end-date').value = end.toISOString().slice(0,10);
        document.getElementById('edit-end-time').value = end.toTimeString().slice(0,5);
      } else {
        document.getElementById('edit-end-date').value = '';
        document.getElementById('edit-end-time').value = '';
      }
    }

    document.getElementById('edit-fullday').checked = schedule.all_day ? true : false;

    document.getElementById('edit-placeInput').value = schedule.place_name || '';
    document.getElementById('edit_place_address').value = schedule.place_address || '';
    document.getElementById('edit_latitude').value = schedule.latitude || '';
    document.getElementById('edit_longitude').value = schedule.longitude || '';

    document.getElementById('editComment').value = schedule.comment || '';

    // 詳細モーダル表示
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
    prevBtn.style.backgroundColor = '#3762F5';
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
    nextBtn.style.backgroundColor = '#3762F5';
    nextBtn.style.width = '40px';
    nextBtn.style.height = '40px';
    nextBtn.style.borderRadius = '50%';
    nextBtn.style.border = 'none';
    nextBtn.style.alignItems = 'center';
  }
  
  // カレンダー名
  const calendarTitle = document.querySelector('.fc-myCalendarName-button');
  if (calendarTitle) {
    calendarTitle.style.marginLeft = '0.5rem';
    calendarTitle.style.backgroundColor = 'transparent';
    calendarTitle.style.border = 'none';
    calendarTitle.style.color = '#64B279';
    calendarTitle.style.alignItems = 'center';
    calendarTitle.style.pointerEvents = 'none';
    calendarTitle.style.fontWeight = 'bold';
  }

  // テーブルヘッダー
  const calendarTr = document.querySelector('.fc-col-header');
  if (calendarTr) {
    calendarTr.style.backgroundColor = '#E1F1E5';
    calendarTr.style.borderRadius = '0px';
  }

  // テーブル
  const calendarTable = document.querySelector('table');
  if (calendarTable) {
    calendarTable.style.borderRadius = '0px';
  }

  // カレンダーの背景
  const calendarBody = document.querySelector('.fc-view');
  if (calendarBody) {
    calendarBody.style.backgroundColor = 'white';
  }



  // --- 編集フォームAjax送信 ---
  $('#editScheduleForm').on('submit', function(e){
    e.preventDefault();
    const id = $(this).data('event-id');
    const data = $(this).serialize();

    $.ajax({
      url: `/schedules/${id}`,
      method: 'PUT',
      data: data,
      success: function(res){
        $('#editModal').modal('hide');
        $('.modal-backdrop').remove();
        $('body').removeClass('modal-open');
        currentEventId = null;

        const event = calendar.getEventById(id);
        event.setProp('title', res.title);
        event.setExtendedProp('category_id', res.category_id);
        event.setExtendedProp('category_name', res.category_name);
        event.setExtendedProp('place_name', res.place_name);
        event.setExtendedProp('place_address', res.place_address);
        event.setExtendedProp('latitude', res.latitude);
        event.setExtendedProp('longitude', res.longitude);
        event.setExtendedProp('comment', res.comment);

        // --- 終日対応 修正版 ---
        const isAllDay = res.all_day ? true : false;
        let start, end;

        if (isAllDay) {
          start = new Date(res.start_date);
          if (res.end_date) {
            end = new Date(res.end_date);
            // FullCalendarは終日イベントのendを「翌日」にする必要あり
            end.setDate(end.getDate() + 1);
          } else {
            end = new Date(res.start_date);
            end.setDate(end.getDate() + 1);
          }
        } else {
          // 時間付きイベント
          start = new Date(res.start_date + 'T' + (res.start_time || '00:00'));
          if (res.end_date) {
            end = new Date(res.end_date + 'T' + (res.end_time || '23:59'));
          } else {
            end = null;
          }
        }

        event.setAllDay(isAllDay);
        event.setStart(start);
        event.setEnd(end);
      },
      error: function(){
        alert('編集の更新に失敗しました');
      }
    });
  });
});

// Google Places Autocomplete 初期化
function initAutocomplete(inputId, addressId, latId, lngId){
  const input = document.getElementById(inputId);
  if(!input || input.autocompleteInitialized) return;

  const autocomplete = new google.maps.places.Autocomplete(input);

  autocomplete.addListener('place_changed', () => {
    const place = autocomplete.getPlace();
    if(!place.geometry) return;

    document.getElementById(addressId).value = place.formatted_address;
    document.getElementById(latId).value = place.geometry.location.lat();
    document.getElementById(lngId).value = place.geometry.location.lng();
  });

  input.autocompleteInitialized = true;
}

// 投稿モーダル
$('#postModal').on('shown.bs.modal', function () {
  initAutocomplete('post-placeInput', 'post_place_address', 'post_latitude', 'post_longitude');
});

// 編集モーダル
$('#editModal').on('shown.bs.modal', function () {
  // 編集モーダルではここで Autocomplete 初期化
  initAutocomplete('edit-placeInput', 'edit_place_address', 'edit_latitude', 'edit_longitude');
});

</script>
@endsection
