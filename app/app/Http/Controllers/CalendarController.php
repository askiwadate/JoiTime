<?php

namespace App\Http\Controllers;

use App\Calendar;
use App\Schedule;
use App\User;
use App\ScheduleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


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
    
    // カレンダー切り替え表示
    public function show($calendar_id){
        $user = Auth::user(); // Userモデル取得
    
        // 自分が作成したカレンダー一覧
        $myCalendars = $user->ownedCalendars()->get(); // ownedCalendars()で取得すれば確実
    
        // 選択されたカレンダー（自分のものかチェック）
        $calendar = $myCalendars->find($calendar_id);
        if (!$calendar) {
            abort(403); // 自分のカレンダーでなければ404
        }
    
        $categories = $calendar->categories()->get();
    
        return view('calendars', compact('calendar', 'myCalendars', 'categories'));
    }

    // カレンダー作成
    public function storeCalendar(Request $request)
    {
        $validated = $request->validate([
            'calendar_title' => 'required|string|max:50',
        ]);
    
        $calendar = Calendar::create([
            'name' => $validated['calendar_title'], // ← カラム名に合わせて修正
            'owner_id' => auth()->id(),
        ]);
    
        return redirect()->route('calendars.show', ['calendar_id' => $calendar->id]);
    }
    

    
   // 投稿モーダル
    public function store(Request $request, Calendar $calendar) {
        $validator = Validator::make($request->all(), [
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
    
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator, 'scheduleForm')
                ->withInput();
        }
    
        $validated = $validator->validated();
    
        $validated['all_day'] = $request->has('all_day') ? true : false;
    
        $validated['calendar_id'] = $calendar->id;
        $validated['creator_id'] = auth()->id() ?? 1;
    
        Schedule::create($validated);
    
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
        $validator = Validator::make($request->all(), [
            'emoji' => 'required|string|max:100',
            'category_name' => [
                'required',
                'string',
                'max:100',
                Rule::unique('schedule_categories')->where(function ($query) {
                    return $query->where('user_id', auth()->id());
                }),
            ],
        ], [
            'category_name.required' => 'カテゴリ名を入力してください。',
            'emoji.required' => 'カテゴリアイコンを入力してください。',
            'category_name.unique' => '同じカテゴリ名は登録できません。',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator, 'categoryForm')
                ->withInput()
                ->with('error', 'カテゴリ登録に失敗しました');
        }

        ScheduleCategory::create([
            'emoji' => $request->emoji,
            'category_name' => $request->category_name,
            'calendar_id' => $calendar->id,
            'user_id' => auth()->id() ?? 1,
            'del_flg' => 0,
        ]);
    
        return redirect()->back();
    }

    // 予定論理削除
    public function softDelete($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->del_flg = 1;
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

    // チェックボックスがチェックされてなかったら、falseを入れる
    $validated['all_day'] = $request->has('all_day') ? true : false;

    $schedule->update($validated);

    // Ajax
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