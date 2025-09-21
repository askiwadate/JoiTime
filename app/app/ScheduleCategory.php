<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleCategory extends Model
{
    //
    public function schedules(){
        return $this->hasMany(Schedule::class,'category_id','id');
    }

}
