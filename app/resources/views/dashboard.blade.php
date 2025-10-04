@extends('layouts/layout')

@section('content')

<section style="background-color: #FFFDF8; min-height: calc(100vh - 57px);">
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block d-none bg-light collapse">
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
			<div class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-4 mb-4">
				<h3 class="font-weight-bolder pl-1">ダッシュボード</h3>
				<div class="row mt-4">
  				<div class="col-12">
   	 				<div class="card" style="background-color: #E1F1E5;">
      				<div class="card-body">
        				<h5 class="card-title font-weight-bolder">ユーザー登録数</h5>
        				<div id="chart" class="pt-1" style="height: 200px;"></div>
      				</div>
    				</div>
  				</div>
				</div>
				<div class="row">
  				<div class="col-sm-6 mt-4">
						<div class="card" style="background-color: #F6F7FB;">
							<div class="card-body">
								<div id="calendar"></div>
							</div>
						</div>
  				</div>
					<div class="col-sm-6 mt-4">
    				<div class="card">
      				<div class="card-body">
        				<h5 class="card-title font-weight-bolder pl-1">ユーザーリスト</h5>
								<div class="d-block d-md-block">
								@foreach($recentUsers as $recent)
    						<div class="card mb-2 p-2">
        					<div class="d-flex align-items-center justify-content-around">
            				<img src="{{ $recent->icon ?? 'default.png' }}" class="rounded-circle mr-2" width="40" height="40">
               				<div>{{ $recent->name }}</div>
											<div class="text-muted">{{ $recent->created_at->timezone('Asia/Tokyo')->format('Y.m.d H:i') }}</div>
       		 				</div>
    						</div>
    						@endforeach
								<div class="d-flex justify-content-center">
									<button class="btn btn-submit" type="button" method="GET">
										<a href="{{ route('users.index') }}">ユーザー管理画面へ</a>
									</button>
								</div>
								</div>
      				</div>
    				</div>
  				</div>
				</div>
			</div>
  </div> 
</section>

@endsection
@section('scripts')
<!-- frappe -->
<script src="https://unpkg.com/frappe-charts@0.0.5/dist/frappe-charts.min.iife.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
	
// グラフ	
	let data = {
  labels: @json($labels),
  datasets: [
    {
      title: "登録者数",
      color: "yellow",
      values: @json($values),
    },
  ],
};

let chart = new Chart({
  parent: "#chart", // or a DOM element
  title: "登録者数",
  data: data,
  type: "line",
  height: 150,
  format_tooltip_x: (d) => (d + "").toUpperCase(),
  format_tooltip_y: (d) => d + "人",
});

// fullcalendar
const calendarEl = document.getElementById( 'calendar' );
  const calendar = new FullCalendar.Calendar( calendarEl, {
    initialView: 'dayGridMonth',
    locale: 'ja',
    headerToolbar: {
      left: 'prev,title,next',
      center: '',
			right: '',

    },
    buttonText: {
      month: '月',
      week: '週',
    },
  } );
  
  calendar.render();
	 
	// カレンダーヘッダー
	const calendarHeader = document.querySelector('.fc-toolbar');
  if (calendarHeader) {
    calendarHeader.style.justifyContent= 'center';
		calendarHeader.style.display= 'flex';
  }

	// テーブルヘッダー
	const calendarTr = document.querySelector('.fc-col-header');
  if (calendarTr) {
    calendarTr.style.borderRadius = '0px';
  }

  // テーブル
  const calendarTable = document.querySelector('table');
  if (calendarTable) {
    calendarTable.style.borderRadius = '0px';
  }
	
	// カレンダーの背景
	const calendarBody = document.querySelector('.fc-view-harness');
  if (calendarBody) {
    calendarBody.style.backgroundColor = 'white';
  }
	
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

});

</script>
@endsection
