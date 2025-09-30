<?php

use App\Calendar;
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

// カレンダー表示
Route::get('/calendars/{calendar_id}', [CalendarController::class,'show'])->name('calendars.show');
// カレンダー作成（Ajax用）
Route::post('/calendars', [CalendarController::class, 'storeCalendar'])->name('calendars.store');
// 予定データ登録
Route::post('/calendars/{calendar}/schedules', [CalendarController::class,'store'])->name('schedules.store');
// 予定表示
Route::get('/calendars/{calendar}/schedules/json', [CalendarController::class, 'schedulesJson'])->name('schedules.json');
// カレンダーIDに紐づけてカテゴリを追加
Route::post('/calendars/{calendar}/categories', [CalendarController::class, 'storeCategory'])->name('categories.store');
// Schedule編集フォーム表示
Route::get('/schedules/{schedule}/edit', [CalendarController::class, 'edit'])->name('schedules.edit');

// Schedule更新
Route::put('/schedules/{schedule}', [CalendarController::class, 'update'])->name('schedules.update');
// Schedule削除（論理削除）
Route::delete('/schedules/{id}/delete', [CalendarController::class, 'softDelete'])->name('schedules.delete');
Route::put('/schedules/{id}/update', [CalendarController::class, 'update'])->name('schedules.update');






