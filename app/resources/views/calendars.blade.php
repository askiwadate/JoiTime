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
              <a class="nav-link active d-flex align-items-center" aria-current="page" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Pro v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2025 Fonticons, Inc.--><path d="M238.9 336C249.6 336 259.6 341.3 265.5 350.2L277.3 368L304 368C330.5 368 352 389.5 352 416L352 528C352 554.5 330.5 576 304 576L112 576C85.5 576 64 554.5 64 528L64 416C64 389.5 85.5 368 112 368L138.7 368L150.5 350.2C156.4 341.3 166.4 336 177.1 336L238.8 336zM517.5 324C523.1 319.1 531.4 318.7 537.4 323.1C543.4 327.5 545.7 335.5 542.7 342.4L504.3 432L560 432C566.7 432 572.6 436.1 575 442.4C577.4 448.7 575.6 455.7 570.6 460.1L442.6 572.1C437 577 428.7 577.4 422.7 573C416.7 568.6 414.4 560.6 417.4 553.7L455.9 464L400.1 464C393.4 464 387.5 459.9 385.1 453.6C382.7 447.3 384.5 440.3 389.5 435.9L517.5 323.9zM208 424C181.5 424 160 445.5 160 472C160 498.5 181.5 520 208 520C234.5 520 256 498.5 256 472C256 445.5 234.5 424 208 424zM547.8 64.4C554.3 63.3 560.9 64.8 566.3 68.8C572.4 73.3 576 80.5 576 88L576 240L575.7 244.9C572.4 269.1 545.2 288 512 288C476.7 288 448 266.5 448 240C448 213.5 476.7 192 512 192C517.5 192 522.9 192.6 528 193.6L528 144.3L416 177.9L416 288.1L415.7 293C412.4 317.2 385.2 336.1 352 336.1C316.7 336.1 288 314.6 288 288.1C288 261.6 316.7 240.1 352 240.1C357.5 240.1 362.9 240.7 368 241.7L368 136C368 125.4 375 116 385.1 113L545.1 65L547.8 64.4zM252.9 64C290 64 320 94 320 131.1L320 137.2C320 193.3 244.8 249.3 209.7 272.5C198.9 279.6 185.1 279.6 174.3 272.5C139.2 249.4 64 193.3 64 137.2L64 131.1C64 94 94 64 131.1 64C152.2 64 172 73.9 184.7 90.8L192 100.6L199.3 90.8C212 73.9 231.8 64 252.9 64z"/></svg>
                <span class="ml-2">カテゴリ</span>
              </a>
            </li>
            <li class="nav-item mb-4">
              <a class="nav-link active d-flex align-items-center" aria-current="page" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M320 64C302.3 64 288 78.3 288 96L288 99.2C215 114 160 178.6 160 256L160 277.7C160 325.8 143.6 372.5 113.6 410.1L103.8 422.3C98.7 428.6 96 436.4 96 444.5C96 464.1 111.9 480 131.5 480L508.4 480C528 480 543.9 464.1 543.9 444.5C543.9 436.4 541.2 428.6 536.1 422.3L526.3 410.1C496.4 372.5 480 325.8 480 277.7L480 256C480 178.6 425 114 352 99.2L352 96C352 78.3 337.7 64 320 64zM258 528C265.1 555.6 290.2 576 320 576C349.8 576 374.9 555.6 382 528L258 528z"/></svg>
                <span class="ml-2">新着</span>
              </a>
            </li>
            <li class="nav-item mb-4">
              <a class="nav-link active d-flex align-items-center" aria-current="page" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M96 192C96 130.1 146.1 80 208 80C269.9 80 320 130.1 320 192C320 253.9 269.9 304 208 304C146.1 304 96 253.9 96 192zM32 528C32 430.8 110.8 352 208 352C305.2 352 384 430.8 384 528L384 534C384 557.2 365.2 576 342 576L74 576C50.8 576 32 557.2 32 534L32 528zM464 128C517 128 560 171 560 224C560 277 517 320 464 320C411 320 368 277 368 224C368 171 411 128 464 128zM464 368C543.5 368 608 432.5 608 512L608 534.4C608 557.4 589.4 576 566.4 576L421.6 576C428.2 563.5 432 549.2 432 534L432 528C432 476.5 414.6 429.1 385.5 391.3C408.1 376.6 435.1 368 464 368z"/></svg>
                <span class="ml-2">メンバーリスト</span>
              </a>
            </li>
            <li class="nav-item mb-4">
              <a class="nav-link active d-flex align-items-center" aria-current="page" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z"/></svg>
                <span class="ml-2">お知らせ</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
        <div class="d-flex">
          <button type="button" style="background-color: transparent; border: none;" id="prev" onclick="prev()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576C461.4 576 576 461.4 576 320zM335 199C344.4 189.6 359.6 189.6 368.9 199C378.2 208.4 378.3 223.6 368.9 232.9L281.9 319.9L368.9 406.9C378.3 416.3 378.3 431.5 368.9 440.8C359.5 450.1 344.3 450.2 335 440.8L231 337C221.6 327.6 221.6 312.4 231 303.1L335 199z"/></svg></button>
          <p class="month ml-3 mr-3" id="today-month"></p>
          <button type="button" style="background-color: transparent; border: none;" id="next" onclick="next()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="svg-2"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M64 320C64 461.4 178.6 576 320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320zM305 441C295.6 450.4 280.4 450.4 271.1 441C261.8 431.6 261.7 416.4 271.1 407.1L358.1 320.1L271.1 233.1C261.7 223.7 261.7 208.5 271.1 199.2C280.5 189.9 295.7 189.8 305 199.2L409 303C418.4 312.4 418.4 327.6 409 336.9L305 441z"/></svg></button>
        </div>
        <div id="calendar"></div>
      </main>
    </div>
  </div>

</section>

@endsection
@section('scripts')
<script>

document.addEventListener('DOMContentLoaded', function() {
  const week = ["日", "月", "火", "水", "木", "金", "土"];
  const today = new Date();
  let showDate = new Date(today.getFullYear(), today.getMonth(), 1);

  // 初期表示
  showProcess(today);

  // 前の月表示
  window.prev = function() {
    showDate.setMonth(showDate.getMonth() - 1);
    showProcess(showDate);
  }

  // 次の月表示
  window.next = function() {
    showDate.setMonth(showDate.getMonth() + 1);
    showProcess(showDate);
  }

  // カレンダー表示
  function showProcess(date) {
    let year = date.getFullYear();
    let month = date.getMonth();
    document.querySelector('#today-month').innerHTML = year + "年&nbsp;" + (month + 1) + "月";

    let calendar = createProcess(year, month);
    document.querySelector('#calendar').innerHTML = calendar;
  }

  // カレンダー作成
  function createProcess(year, month) {
    let calendar = "<table><tr class='dayOfWeek'>";
    for (let i = 0; i < week.length; i++) {
      calendar += "<th>" + week[i] + "</th>";
    }
    calendar += "</tr>";

    let count = 0;
    let startDayOfWeek = new Date(year, month, 1).getDay();
    let endDate = new Date(year, month + 1, 0).getDate();
    let lastMonthEndDate = new Date(year, month, 0).getDate();
    let row = Math.ceil((startDayOfWeek + endDate) / week.length);

    for (let i = 0; i < row; i++) {
      calendar += "<tr>";
      for (let j = 0; j < week.length; j++) {
        if (i == 0 && j < startDayOfWeek) {
          calendar += "<td class='disabled'>" + (lastMonthEndDate - startDayOfWeek + j + 1) + "</td>";
        } else if (count >= endDate) {
          count++;
          calendar += "<td class='disabled'>" + (count - endDate) + "</td>";
        } else {
          count++;
          if(year == today.getFullYear() && month == today.getMonth() && count == today.getDate()){
            calendar += "<td class='today'>" + count + "</td>";
          } else {
            calendar += "<td>" + count + "</td>";
          }
        }
      }
      calendar += "</tr>";
    }
    return calendar;
  }
});


</script>