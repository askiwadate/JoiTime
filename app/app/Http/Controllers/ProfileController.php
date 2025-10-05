<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        if(!$user || $user->role !== 0){
            abort(403);
        }

        $mail = $request->input('mail');
        $name = $request->input('name');
    
        $query = User::where('role',1);
    
        if ($mail && $name) {
            $query->where('email', 'like', "%{$mail}%")->where('name', 'like', "%{$name}%");
        } elseif ($mail) {
            $query->where('email', 'like', "%{$mail}%");
        } elseif ($name) {
            $query->where('name', 'like', "%{$name}%");
        }

        $users = $query->paginate(3); // 1ページ10件
    
        return view('usersManage', compact('users', 'mail', 'name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        return view('usersManage');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        // 名前・生年月日更新
        $user->name = $request->input('name');
        $user->birthday = $request->input('birthday');

        // アイコンアップロード
        if ($request->hasFile('icon')) {
            // 古いアイコンがある場合は削除
            if ($user->icon) {
                Storage::disk('public')->delete($user->icon);
            }

            // 新しいアイコン保存
            $path = $request->file('icon')->store('icons', 'public');
            $user->icon = $path;
        }

        $user->save();

        return back()->with('success', 'プロフィールを更新しました！');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        if(!$user || $user->role !== 0){
            abort(403);
        }

        $destroyUser = User::findOrfail($id);

        if($destroyUser->id === $user->id){
            return back()->with('error','管理者アカウントの削除はできません。');
        }

        $destroyUser->delete();

        return back();
    }
}
