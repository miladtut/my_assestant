<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stores')->delete();
        
        \DB::table('stores')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Demo Store',
                'phone' => '+101511111111',
                'email' => 'demo.store@gmail.com',
                'logo' => '2023-08-16-64dca8ad238c4.png',
                'latitude' => '23.81695886557418',
                'longitude' => '90.36934144046135',
                'address' => 'House, road',
                'footer_text' => NULL,
                'minimum_order' => '0.00',
                'comission' => NULL,
                'schedule_order' => 0,
                'status' => 1,
                'vendor_id' => 1,
                'created_at' => '2023-08-16 02:45:01',
                'updated_at' => '2023-08-16 02:45:19',
                'free_delivery' => 0,
                'rating' => NULL,
                'cover_photo' => '2023-08-16-64dca8ad263f6.png',
                'delivery' => 1,
                'take_away' => 1,
                'item_section' => 1,
                'tax' => '5.00',
                'zone_id' => 1,
                'reviews_section' => 1,
                'active' => 1,
                'off_day' => ' ',
                'gst' => NULL,
                'self_delivery_system' => 0,
                'pos_system' => 0,
                'minimum_shipping_charge' => '0.00',
                'delivery_time' => '30-40 min',
                'veg' => 1,
                'non_veg' => 1,
                'order_count' => 0,
                'total_order' => 0,
                'module_id' => 1,
                'order_place_to_schedule_interval' => 0,
                'featured' => 1,
                'per_km_shipping_charge' => 0.0,
                'prescription_order' => 0,
                'slug' => 'demo-store',
                'maximum_shipping_charge' => NULL,
                'cutlery' => 0,
                'meta_title' => NULL,
                'meta_description' => NULL,
                'meta_image' => NULL,
                'announcement' => 0,
                'announcement_message' => NULL,
            ),
        ));
        
        
    }
}