<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Card::class, 50)
            ->create()
            ->each(function($u){
            $u->save();
        });
    }
}
