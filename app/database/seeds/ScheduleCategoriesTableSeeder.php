<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ScheduleCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('schedule_categories')->insert([
            'user_id' => 1,
            'calendar_id' => 1,
            'category_name' => '美容院',
            'emoji' => '✂️',
            'del_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);
    }
}
