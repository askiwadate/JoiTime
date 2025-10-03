<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //最近の登録者
        $recentUsers = User::latest()->take(4)->get();

        // 月ごとの登録者数
        $monthUsers = User::select(
            DB::raw('DATE_FORMAT(created_at,"%Y%m") AS month'),
            DB::raw('COUNT(*) AS count')
        )
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        $labels = $monthUsers->pluck('month')->map(function($m){
            // "202509" -> "2025-09-01" として Carbon に渡す
            return Carbon::createFromFormat('Ym-d', $m.'-01')->format('n月');
        });
        $values = $monthUsers->pluck('count');

        return view('dashboard',compact('recentUsers','labels','values'));
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
        return view('dashboard');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
