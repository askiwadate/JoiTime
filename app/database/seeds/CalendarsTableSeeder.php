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
            [
                'name' => 'プライベート用',
                'owner_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' =>Carbon::now(),
            ],
            [
                'name' => '仕事用',
                'owner_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' =>Carbon::now(), 
            ]
        ]);
    }
}
