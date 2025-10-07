<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleCategory extends Model
{
    //スケジュールとのリレーション
    public function schedules(){
        return $this->hasMany(Schedule::class,'category_id','id');
    }

    // ユーザーとのリレーション
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    // カレンダーとリレーション
    public function calendars(){
        return $this->belongsTo(Calendar::class,'calendar_id','id');
    }

    protected $fillable = [
        'user_id',
        'calendar_id',
        'category_name',
        'emoji',
        'del_flg',
    ];
}
