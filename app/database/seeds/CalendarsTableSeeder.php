<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CalendarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('calendars')->insert([
            'name' => '山田家族',
            'owner_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);

        DB::table('calendars')->insert([
            'name' => 'バイト用',
            'owner_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);
    }
}
