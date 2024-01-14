<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeliveryHistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('delivery_histories')->delete();
        
        
        
    }
}