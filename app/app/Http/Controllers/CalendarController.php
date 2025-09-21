<?php

namespace App\Http\Controllers;

use App\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    //
    // public function index(){
    //     $calendar = new Calendar;
    //     $calendars = $calendar->all();

    //     $calendar_with_user = $calendar->with('users')->first()->toArray();
    //     var_dump($calendar_with_user);

    //     return view('calendars');
    // }

    public function show($calendar_id){
        // まだauth未導入なので固定
        $userId = 1;

        // 自分が作成したカレンダー一覧
        $myCalendars =Calendar::where('owner_id',$userId)->get();

        // 参加しているカレンダー一覧
        $joinedCalendars = Calendar::whereHas('users',function($query) use ($userId){
        $query->where('user_id',$userId);
        })->get();

        // どのカレンダーを表示するの選択（？caledar_id=xx)で指定
        $calendar = Calendar::findOrFail($calendar_id);

        return view('calendars',compact('calendar','myCalendars','joinedCalendars'));
    }
}
