<?php

use Illuminate\Database\Seeder;

class ProfileOptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile_option')->insert([
            'profile_id' => '1',
            'option_id'   =>  '1',
        ]);
        DB::table('profile_option')->insert([
            'profile_id' => '1',
            'option_id'   =>  '2',
        ]);
        DB::table('profile_option')->insert([
            'profile_id' => '2',
            'option_id'   =>  '3',
        ]);

    }
}
