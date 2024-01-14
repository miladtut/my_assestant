<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfflinePaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('offline_payments')->delete();
        
        
        
    }
}