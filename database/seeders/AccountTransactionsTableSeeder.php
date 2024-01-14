<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountTransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('account_transactions')->delete();
    }
}
