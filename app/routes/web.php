<?php

use App\Calendar;
use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AdminController;

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

// 認証
// ユーザー制御（一般）

// Route::group(['middleware' => 'auth'],function(){
//    // パスワード忘れた人用
//    Route::get('/calendars/fogot/password',[ForgotPasswordController::class,'index'])->name('forgot');
//    // ユーザー情報更新
//    Route::put('/calendars/profile',[ProfileController::class,'update'])->name('profile.update');
//    // カレンダー一覧表示
//    Route::get('/calendars/{calendar_id}', [CalendarController::class,'show'])->name('calendars.show');
//    // カレンダー作成（Ajax用）
//    Route::post('/calendars', [CalendarController::class, 'storeCalendar'])->name('calendars.store');
//    // 予定データ登録
//    Route::post('/calendars/{calendar}/schedules', [CalendarController::class,'store'])->name('schedules.store');
//    // 予定表示
//    Route::get('/calendars/{calendar}/schedules/json', [CalendarController::class, 'schedulesJson'])->name('schedules.json');
//    // カレンダーIDに紐づけてカテゴリを追加
//    Route::post('/calendars/{calendar}/categories', [CalendarController::class, 'storeCategory'])->name('categories.store');
//    // 予定編集フォーム表示
//    Route::get('/schedules/{schedule}/edit', [CalendarController::class, 'edit'])->name('schedules.edit');

//    // 予定更新
//    Route::put('/schedules/{schedule}', [CalendarController::class, 'update'])->name('schedules.update');
//    // 予定削除（論理削除）
//    Route::delete('/schedules/{id}/delete', [CalendarController::class, 'softDelete'])->name('schedules.delete');

//    Route::put('/schedules/{id}/update', [CalendarController::class, 'update'])->name('schedules.update');
//    // ログアウト
//    Route::post('/logout',[LoginController::class,'logout'])->name('logout');
//    // ログアウト
//    Route::post('/signout',[LoginController::class,'signout'])->name('signout');
//   });


// ダッシュボード
Route::get('/admin/dashboard/main',[AdminController::class,'index'])->name('dashboard.index');
// ユーザーリスト（ユーザー管理画面)
Route::get('/admin/user/control',[ProfileController::class,'index'])->name('users.index');