<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModuleZoneTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('module_zone')->delete();
        
        \DB::table('module_zone')->insert(array (
            0 => 
            array (
                'id' => 1,
                'module_id' => 1,
                'zone_id' => 1,
                'per_km_shipping_charge' => 10.0,
                'minimum_shipping_charge' => 10.0,
                'maximum_cod_order_amount' => 10.0,
                'maximum_shipping_charge' => 10.0,
            ),
        ));
        
        
    }
}