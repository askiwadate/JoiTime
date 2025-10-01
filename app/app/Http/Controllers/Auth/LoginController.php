<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // デフォルトのホームルート
    protected const HOME = '/home';

// ログアウト
public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('login');
}

    /**
     * ログイン後にリダイレクト
     */
    protected function authenticated(Request $request, $user)
    {
        $credentials = $request->only('email', 'password');

        // デバッグ用に確認
        if (!Auth::attempt($credentials)) {
            dd('ログイン失敗'); // ここで止まる → どこが問題か確認
        }
    
        // 成功した場合
        return redirect()->intended('/home');
    }

    public function login(Request $request)
    {
    // まずフォームからの入力をそのまま確認
        $credentials = $request->only('email', 'password');
        dd($credentials);

    // データベースのパスワードと比較
    $user = \App\User::where('email', $request->email)->first();
    dd(Hash::check($request->password, $user->password));
    }
}