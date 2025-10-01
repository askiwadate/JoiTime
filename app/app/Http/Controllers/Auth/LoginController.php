<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // ログインフォーム表示
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // ログイン処理
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // ログイン成功
            $calendar = Auth::user()->ownedCalendars()->first(); // 作ったカレンダーだけ取得
        
            if ($calendar) {
                // 作ったカレンダーがある場合はそのカレンダーにリダイレクト
                return redirect()->route('calendars.show', $calendar->id);
            } else {
                // 作ったカレンダーがない場合は404
                abort(404);
            }
        } else {
            return back()->withErrors(['email' => 'メールアドレスまたはパスワードが違います']);
        }
    }

    // ログアウト
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}