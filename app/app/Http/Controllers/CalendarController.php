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

        $categories = $calendar->categories()->get(); // このカレンダーのカテゴリ一覧を取得

        return view('calendars',compact('calendar','myCalendars','joinedCalendars','categories'));
    }

    // 投稿モーダル
    public function store(Request $request, Calendar $calendar) {
        // バリデーション
        $validated = $request->validate([
            'title' => 'required|string|max:50',
            'start_date' => 'required|date',
            'start_time' => 'nullable|date_format:H:i',
            'end_date' => 'required|date',
            'end_time' => 'nullable|date_format:H:i',
            'all_day' => 'nullable|boolean',
            'category_id' => 'required|exists:schedule_categories,id',
            'comment' => 'nullable|string|max:255',
            'place_name' => 'nullable|string|max:255',
            'place_address' => 'nullable|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);
    
        // 必須データを追加
        $validated['calendar_id'] = $calendar->id;
        $validated['creator_id'] = auth()->id() ?? 1;
    
        // DB保存
        $schedule = Schedule::create($validated);
    
        // 成功したら元のページにリダイレクト
        return redirect()->back();
    }
    
    // カレンダー反映API
    public function schedulesJson($calendar_id) {
        $schedules = Schedule::with('category')->where('calendar_id', $calendar_id)->get();
    
        $events = $schedules->map(function($schedule){
            return [
                'id' => $schedule->id,
                'title' => $schedule->category->emoji . ' ' . $schedule->title,
                'start' => $schedule->start_date . ' ' . ($schedule->start_time ?? '00:00'),
                'end' => $schedule->end_date . ' ' . ($schedule->end_time ?? '23:59'),
                'category' => $schedule->category ? $schedule->category->category_name : null,
                'extendedProps' => [
                    'category_name' => $schedule->category->category_name ?? '',
                    'place_name' => $schedule->place_name,
                    'place_address' => $schedule->place_address,
                    'latitude' => $schedule->latitude,
                    'longitude' => $schedule->longitude,
                    'comment' => $schedule->comment,
                ]
            ];
        });
    
        return response()->json($events);
    }
    

    // カテゴリ登録
    public function storeCategory(Request $request, Calendar $calendar){
        $validated = $request->validate([
            'emoji' => 'nullable|string|max:100',
            'category_name' => 'required|string|max:100',
        ]);
        
        $validated['calendar_id'] = $calendar->id;
        $validated['user_id'] = auth()->id() ?? 1;
        $validated['del_flg'] = 0;
        
        ScheduleCategory::create($validated);
        return redirect()->back();
}


}