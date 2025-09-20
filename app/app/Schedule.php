<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    public function category(){
        return $this->belongsTo(ScheduleCategory::class,'categoy_id','id');
    }
}
