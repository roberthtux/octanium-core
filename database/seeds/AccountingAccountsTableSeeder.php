<?php

use Illuminate\Database\Seeder;

class AccountingAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounting_accounts')->insert([
            'account' => '1110-000-000',
            'active' => '1',
            'description' => 'CAJA',
            'type' => 'ACUMULATIVA',
            'nature' => 'DEUDORA',
            'father' => '0',
            'item_id' => 1,
        ]);
    }
}
