<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    //
    public function users(){
        return $this->belongsToMany(User::class,'calendar_users','calendar_id','user_id');
    }
}
