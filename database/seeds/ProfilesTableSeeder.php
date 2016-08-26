<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'name' => 'Default',
        ]);
        DB::table('profiles')->insert([
            'name' => 'Despachador',
        ]);
        DB::table('profiles')->insert([
            'name' => 'Responsable de turno',
        ]);
    }
}
