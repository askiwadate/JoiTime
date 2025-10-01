<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | パスワードリセット処理を行います。
    | リセット後はログイン画面にリダイレクトし、自動ログインはしません。
    |
    */

    use ResetsPasswords;

    // パスワードリセット後のリダイレクト先
    protected $redirectTo = '/login'; // ログイン画面に飛ばす

    /**
     * パスワードリセット処理をオーバーライド
     */
    protected function resetPassword(User $user, $password)
    {
        // Hash::make は不要！
        $user->password = $password; // モデルの setPasswordAttribute で自動ハッシュされる
        $user->setRememberToken(Str::random(60));
        $user->save();
    }

}