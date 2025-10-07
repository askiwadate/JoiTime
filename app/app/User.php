<?php

namespace App;

use App\Notifications\PasswordReset;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','password','birthday','role','icon','del_flg'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // パスワードは自動ハッシュ
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    // 作成したカレンダー
    public function ownedCalendars()
    {
        return $this->hasMany(Calendar::class, 'owner_id','id');
    }

    // 作成したスケジュール
    public function schedules(){
        return $this->hasMany(Schedule::class,'creator_id','id');
    }

    // 作成したカテゴリ
    public function categories(){
        return $this->hasMany(ScheduleCategory::class,'user_id','id');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordReset($token));

    }

}
