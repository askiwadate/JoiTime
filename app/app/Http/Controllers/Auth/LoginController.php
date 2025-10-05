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

        // ログイン成功したら
        if (Auth::attempt($credentials)) {
            $user = Auth()->user();

            if($user->role == 0){
                return redirect()->route('dashboard.index');
            }

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

    // 退会（論理削除）
    public function signout()
    {
        
        $user = Auth::user();
        // まずログアウト
        Auth::logout();

        // ユーザー削除(論理削除)
        $user->del_flg = 1;
        $user->save();
    
        // カレンダー削除（del_flg用意していなかったため物理削除)
        $user->ownedCalendars()->delete();
    
    
        // 会員登録ページに遷移
        return redirect('register');
    }
    
}
