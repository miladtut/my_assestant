<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoyaltyPointTransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('loyalty_point_transactions')->delete();
        
        
        
    }
}