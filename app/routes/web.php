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
// カレンダー画面で予定一覧取得
Route::get('/calendars/{calendar}/schedules', [CalendarController::class, 'schedules']);

// 予定作成（AJAX）
Route::post('/calendars/{calendar}/schedules', [CalendarController::class, 'store'])->name('schedules.store');
