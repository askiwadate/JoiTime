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
        DB::table('users')->insert([
            'name' => 'たろう',
            'email' => 'test.Taro@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 0,
            'birthday' => '1999-09-09',
            'icon' => null,
            'del_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now(),
        ]);
    }
}
