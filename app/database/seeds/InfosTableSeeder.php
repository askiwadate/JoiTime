<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('infos')->insert([
            'title' => 'テスト',
            'caption' => 'テストデータ',
            'body' => 'これはテスト用のデータです。',
            'publish_date' => Carbon::now(),
            'del_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);
    }
}
