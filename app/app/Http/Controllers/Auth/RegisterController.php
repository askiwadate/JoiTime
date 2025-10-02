<?php

namespace App\Http\Controllers\Auth;

use App\Calendar;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    public const HOME = '/calendars';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function registered(Request $request, $user)
    {
        // ユーザーの最初のカレンダーを取得
        $calendar = $user->ownedCalendars()->first();

        // カレンダーがなければ作成
        if (!$calendar) {
            $calendar = $user->ownedCalendars()->create([
                'name' => $user->name . 'のカレンダー',
            ]);
        }

        // 作成したカレンダー詳細ページへリダイレクト
        return redirect()->route('calendars.show', ['calendar_id' => $calendar->id]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */


    protected function create(array $data)
    {
        // ユーザー作成
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'], // モデルで自動ハッシュ
        ]);

        // カレンダー作成（nameカラムを使用）
        $user->ownedCalendars()->create([
            'name' => $user->name . 'のカレンダー',
        ]);

        return $user;
    }
}
