<?php

use Illuminate\Database\Seeder;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('user_types')->insert([
            'description' => 'Administrador',
            'active' => '1',
        ]);
         DB::table('user_types')->insert([
            'description' => 'Cajero',
            'active' => '1',
        ]);
         DB::table('user_types')->insert([
            'description' => 'Supervisor',
            'active' => '1',
        ]);
         DB::table('user_types')->insert([
            'description' => 'Despachador',
            'active' => '1',
        ]);
         DB::table('user_types')->insert([
            'description' => 'Mantenimiento',
            'active' => '1',
        ]);
         DB::table('user_types')->insert([
            'description' => 'Facturación',
            'active' => '1',
        ]);
         DB::table('user_types')->insert([
            'description' => 'Admant',
            'active' => '1',
        ]);
         DB::table('user_types')->insert([
            'description' => 'Arrendamiento',
            'active' => '1',
        ]);
    }
}
