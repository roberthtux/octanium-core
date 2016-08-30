<?php

use Illuminate\Database\Seeder;

class UserProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile_option')->insert([
            'user_id' => '1',
            'profile_id'   =>  '1',
        ]);
        DB::table('profile_option')->insert([
            'user_id' => '1',
            'profile_id'   =>  '2',
        ]);
        DB::table('profile_option')->insert([
            'user_id' => '2',
            'profile_id'   =>  '1',
        ]);
        DB::table('profile_option')->insert([
            'user_id' => '2',
            'profile_id'   =>  '3',
        ]);
    }
}
