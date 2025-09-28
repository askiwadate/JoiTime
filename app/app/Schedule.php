<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Schedule extends Model
{
    //
    public function category(){
        return $this->belongsTo(ScheduleCategory::class,'category_id','id');
    }

    protected $fillable = ['calendar_id','title','start_date','start_time','end_date','end_time','all_day','category_id','place_name','place_address','latitude','longitude','comment','creator_id','del_flg'];

    // 1つのカレンダーに属する
    public function calendars(){
        return $this->belongsTo(Calendar::class,'calendar_id','id');
    }

    public function creator(){
        return $this->belongsTo(User::class,'creator_id');
    }
}
