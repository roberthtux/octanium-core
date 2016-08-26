<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TurnsTableSeeder::class);
        $this->call(UserTypesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(CardsTableSeeder::class);
        $this->call(CardTransactionsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(AccountingAccountsTableSeeder::class);
    }
}
