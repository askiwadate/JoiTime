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



    // カレンダー表示
    public function show($calendar_id){
        // まだauth未導入なので固定
        $userId = 1;

        // 自分が作成したカレンダー一覧
        $myCalendars =Calendar::where('owner_id',$userId)->get();

        // どのカレンダーを表示するの選択（？caledar_id=xx)で指定
        $calendar = Calendar::findOrFail($calendar_id);

        $categories = $calendar->categories()->get(); // このカレンダーのカテゴリ一覧を取得

        return view('calendars',compact('calendar','myCalendars','categories'));
    }

    // カレンダー作成
    public function storeCalendar(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
        ]);
    
        $validated['owner_id'] = auth()->id() ?? 1;
    
        $calendar = Calendar::create($validated);
    
        // 作ったカレンダー画面にリダイレクト
        return redirect()->route('calendars.show', ['calendar_id' => $calendar->id]);
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

    // チェックボックス未チェックでも false をセット
    $validated['all_day'] = $request->has('all_day') ? true : false;

    // 必須データを追加
    $validated['calendar_id'] = $calendar->id;
    $validated['creator_id'] = auth()->id() ?? 1;

    // DB保存
    $schedule = Schedule::create($validated);

    // 成功したら元のページにリダイレクト
    return redirect()->back();
}
    
    // カレンダー反映
    public function schedulesJson($calendar_id) {
        $schedules = Schedule::with('category')
            ->where('calendar_id', $calendar_id)
            ->where('del_flg', 0)
            ->get();
    
        $events = $schedules->map(function($schedule){
            return [
                'id' => $schedule->id,
                'title' => ($schedule->category ? $schedule->category->emoji . ' ' : '') . $schedule->title,
                'start' => $schedule->start_date . ($schedule->start_time ? ' ' . $schedule->start_time : ''),
                'end' => $schedule->all_day ? date('Y-m-d', strtotime($schedule->end_date . ' +1 day')) : ($schedule->end_date && $schedule->end_time ? $schedule->end_date . ' ' . $schedule->end_time: null),
                'allDay' => (bool)$schedule->all_day,
    
                // 👇 extendedProps に必要なデータをまとめて返す
                'extendedProps' => [
                    'category_id'   => $schedule->category_id,
                    'category_name' => $schedule->category->category_name ?? '',
                    'place_name'    => $schedule->place_name,
                    'place_address' => $schedule->place_address,
                    'latitude'      => $schedule->latitude,
                    'longitude'     => $schedule->longitude,
                    'comment'       => $schedule->comment,
                    'all_day'       => (bool)$schedule->all_day,
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

    // 予定論理削除
    public function softDelete($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->del_flg = 1; // 論理削除フラグを立てる
        $schedule->save();
    
        return redirect()->back();
    }

// 予定編集
public function update(Request $request, $id)
{
    $schedule = Schedule::findOrFail($id);

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

    // チェックボックスは未チェックだと送信されないので明示的に false をセット
    $validated['all_day'] = $request->has('all_day') ? true : false;

    $schedule->update($validated);

    // Ajax対応：JSONで返す
    return response()->json([
        'id' => $schedule->id,
        'title' => ($schedule->category ? $schedule->category->emoji . ' ' : '') . $schedule->title,
        'start_date' => $schedule->start_date,
        'start_time' => $schedule->start_time,
        'end_date' => $schedule->end_date,
        'end_time' => $schedule->end_time,
        'all_day' => (bool)$schedule->all_day,
        'category_id' => $schedule->category_id,
        'place_name' => $schedule->place_name,
        'place_address' => $schedule->place_address,
        'latitude' => $schedule->latitude,
        'longitude' => $schedule->longitude,
        'comment' => $schedule->comment,
    ]);
}

}