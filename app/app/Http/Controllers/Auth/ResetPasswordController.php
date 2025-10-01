<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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

    /**
     * リセット後にリダイレクトする先
     */
    protected $redirectTo = '/login'; // ログイン画面へ

    /**
     * パスワードリセット処理
     * 自動ログインしないようにオーバーライド
     */
public function reset(Request $request)
{
    dd('リセット処理到達');
    return $this->traitReset($request);
}

    /**
     * リセットフォーム表示
     */
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset', [
            'token' => $token,
            'email' => $request->email,
        ]);
    }

}