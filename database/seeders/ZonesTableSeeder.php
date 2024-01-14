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
                'coordinates' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'Ø¹Uxð–V@€K—ø Ö7@ºU€•V@:#o3nÒ7@ºUØ6–V@1$ºÍ7@Õ¹U˜Î˜V@ôvÃ÷Í7@ºUø|™V@Î†ËècÒ7@Ø¹Uxð–V@€K—ø Ö7@',
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