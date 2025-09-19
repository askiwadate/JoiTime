<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('schedules')->insert([
            'title' => '美容院',
            'start_date' => '2025-09-21',
            'start_time' => '10:00:00',
            'end_date' => '2025-09-21',
            'end_time' => '11:30:00',
            'all_day' => 0,
            'category_id' => 1,
            'place_name' => '吉祥寺駅',
            'latitude' => 35.703,
            'longitude' => 139.579,
            'creator_id' => 1,
            'del_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);
    }
}
