<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            'name' => 'Registro',
            'uri'   =>  '/com/octanium/main/view/Registro.fxml',
            'function'  =>  'module',
        ]);
        DB::table('options')->insert([
            'name' => 'Horarios',
            'uri'   =>  '/com/octanium/main/view/Horarios.fxml',
            'function'  =>  'module',
        ]);
        DB::table('options')->insert([
            'name' => 'Apertura',
            'uri'   =>  '/com/octanium/main/view/Apertura.fxml',
            'function'  =>  'screen',
        ]);
    }
}
