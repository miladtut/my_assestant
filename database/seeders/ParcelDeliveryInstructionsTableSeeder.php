<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ParcelDeliveryInstructionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('parcel_delivery_instructions')->delete();
        
        
        
    }
}