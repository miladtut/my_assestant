<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfflinePaymentMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('offline_payment_methods')->delete();
        
        
        
    }
}