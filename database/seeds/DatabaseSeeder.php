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
        $this->call(UserTypesSeeder::class);
        $this->call(TurnsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(CardsTableSeeder::class);
        $this->call(CardTransactionsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(AccountingAccountsTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(ProfileOptionTableSeeder::class);
        $this->call(UserProfileTableSeeder::class);
    }
}
