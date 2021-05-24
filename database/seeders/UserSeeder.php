<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '최고관리자',
                'email' => 'itnbasic@itnbasic.com',
                'password' => bcrypt('tkfkdgo12!@'),
                'level' => 11,
                'mailing' => 1,
                'today_login' => Carbon::now(),
                'email_certify' => Carbon::now(),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => '관리자',
                'email' => 'ask@itnbasic.com',
                'password' => bcrypt('tkfkdgo12!@'),
                'level' => 10,
                'mailing' => 1,
                'today_login' => Carbon::now(),
                'email_certify' => Carbon::now(),
                'remember_token' => Str::random(10),
            ]
        ]);
    }
}
