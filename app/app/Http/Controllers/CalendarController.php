<?php

namespace App\Http\Controllers;

use App\Calendar;
use App\Schedule;
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

    public function store(Request $request){
        $validated = $request->validate([
            'calendar_id' => 'required|exists:calendars,id',
            'title' => 'required|string|max:50',
            'start_date' => 'required|date',
            'start_time' => 'nullable|date_format:H:i',
            'end_date' => 'required|date',
            'end_time' => 'nullable|date_format:H:i',
            'category_id' =>'required|exists:schedule_categories,id',
            'place_name' => 'nullable|string|max:255',
            'comment' => 'nullable|string|max:255', 
        ]);

        // creator_idはログインユーザーに置き換える
        $validated['creator_id'] = 1;

        $schedule = Schedule::create($validated);
        // JSONで返す
        return response()->json($schedule);
    }
}
