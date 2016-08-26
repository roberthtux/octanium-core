<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('users')->insert([
            'user_type_id' => '1',
            'turn_id'=> '1',
            'name' => 'John',
            'first_lastname' => '',
            'second_lastname' => '',
            'login' => 'admin',
            'password' => bcrypt('secret'),
            'email' => 'correo@dominio.com',
            'api_token' => 'EwaHnG3uZwTS0gmHCMyYqQhmufRZzaxsCCh7VPpl',
        ]);
        */
       factory(App\Models\User::class, 5)->create()->each(function($u) {
        $u->save();
       });
    }
}
