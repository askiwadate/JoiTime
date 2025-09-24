<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// カレンダー画面表示
Route::get('/calendars/{calendar_id}',[CalendarController::class,'show'])->name('calendars.show');
// 予定作成（モーダルから非同期POST)
Route::post('/calendars',[CalendarController::class,'store'])->name('schedules.store');
// 登録済みの予定取得（カレンダーに反映用）
Route::get('/calendars',[CalendarController::class,'fetch'])->name('schedules.fetch');