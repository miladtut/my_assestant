<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('zones')->delete();
        
        \DB::table('zones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Demo Zone',
                'coordinates' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'عUx�V@�K�� �7@�U��V@:#o3n�7@�U�6�V@1$��7@չU�ΘV@�v���7@�U�|�V@Ά��c�7@عUx�V@�K�� �7@',
                'status' => 1,
                'created_at' => '2023-08-16 02:35:04',
                'updated_at' => '2023-08-16 02:35:44',
                'store_wise_topic' => 'zone_1_store',
                'customer_wise_topic' => 'zone_1_customer',
                'deliveryman_wise_topic' => 'zone_1_delivery_man',
                'cash_on_delivery' => 1,
                'digital_payment' => 1,
                'increased_delivery_fee' => 0.0,
                'increased_delivery_fee_status' => 0,
                'increase_delivery_charge_message' => NULL,
                'offline_payment' => 0,
            ),
        ));
        
        
    }
}