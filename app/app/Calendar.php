<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{


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

    protected $fillable = [
        'name',
        'owner_id',
        'user_id',
        'title',
    ];
}
