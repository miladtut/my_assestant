<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeliveryMenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('delivery_men')->delete();
        
        
        
    }
}