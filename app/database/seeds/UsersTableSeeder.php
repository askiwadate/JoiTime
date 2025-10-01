<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert([
        //     'name' => 'たろう',
        //     'email' => 'test.Taro@gmail.com',
        //     'password' => Hash::make('password123'),
        //     'role' => 0,
        //     'birthday' => '1999-09-09',
        //     'icon' => null,
        //     'del_flg' => 0,
        //     'created_at' => Carbon::now(),
        //     'updated_at' =>Carbon::now(),
        // ]);

        DB::table('users')->insert([
           [
                'name' => 'あすか',
                'email' => 'as.iwadate@gmail.com',
                'password' => Hash::make('kinako1116'),
                'role' => 0,
                'birthday' => '1999-10-12',
                'icon' => null,
                'del_flg' => 0,
                'created_at' => Carbon::now(),
                'updated_at' =>Carbon::now(),
           ],
           [
                'name' => 'イワダテ',
                'email' => 'iwadate.a@gmail.com',
                'password' => Hash::make('Tnsakokimu7'),
                'role' => 0,
                'birthday' => '1999-10-03',
                'icon' => null,
                'del_flg' => 0,
                'created_at' => Carbon::now(),
                'updated_at' =>Carbon::now(),
           ],
        ]);
    }
}
