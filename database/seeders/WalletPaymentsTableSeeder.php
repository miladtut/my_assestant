<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WalletPaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wallet_payments')->delete();
        
        
        
    }
}