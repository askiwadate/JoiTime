<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    //共有ユーザー（多対多）
    public function users(){
        return $this->belongsToMany(User::class,'calendar_users','calendar_id','user_id');
    }

    // カレンダー作成者
    public function owner(){
        return $this->belongsTo(User::class,'owner_id','id');
    }

    // 複数の予定(1対多)
    public function schedules(){
        return $this->hasMany(Schedule::class,'calendar_id','id');
    }

    // 1つのカレンダーは複数のカテゴリを持つ
    public function categories(){
        return $this->hasMany(ScheduleCategory::class,'calendar_id','id');
    }
}
