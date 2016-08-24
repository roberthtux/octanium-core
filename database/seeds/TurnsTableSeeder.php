<?php

use Illuminate\Database\Seeder;

class TurnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turns')->insert([
            'initial_hour' => '',
            'final_hour'=> '',
            'description' => 'Mañana',
            'active' => '',
            'hours_turn' => '',
        ]);
    }
}
