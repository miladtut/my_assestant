<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentRequestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_requests')->delete();
        
        
        
    }
}