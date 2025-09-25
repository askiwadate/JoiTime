<?php

namespace App\Http\Controllers;

use App\Calendar;
use App\Schedule;
use App\ScheduleCategory;
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

        //カテゴリー一覧を追加
        $categories = ScheduleCategory::all();

        return view('calendars',compact('calendar','myCalendars','joinedCalendars','categories'));
    }

    public function schedules(Calendar $calendar)
{
    // 予定一覧を返す（JSON）
    $schedules = $calendar->schedules()->with('category', 'creator')->get();
    return response()->json($schedules);
}

public function store(Request $request, Calendar $calendar)
{
    $validated = $request->validate([
        'title' => 'required|string|max:50',
        'start_date' => 'required|date',
        'start_time' => 'nullable|date_format:H:i',
        'end_date' => 'required|date',
        'end_time' => 'nullable|date_format:H:i', 
        'all_day' => 'nullable|boolean',
        'category_id' =>'required|exists:schedule_categories,id',
        'place_name' => 'nullable|string|max:255',
        'place_address' => 'nullable|string|max:255',
        'latitude' => 'nullable|numeric',
        'longitude' => 'nullable|numeric',
        'comment' => 'nullable|string|max:255', 
    ]);

    $validated['calendar_id'] = $calendar->id;
    $validated['creator_id'] = auth()->id() ?? 1;

    $schedule = Schedule::create($validated);

    return response()->json($schedule->load('category', 'creator'));
}

}
