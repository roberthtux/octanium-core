<?php

use Illuminate\Database\Seeder;

class CardTransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
       factory(App\Models\CardTransaction::class,50)
            ->create()
            ->each(function($u){
            $u->save();
        });
    }
}
