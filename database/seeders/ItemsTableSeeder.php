<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items')->delete();
        
        \DB::table('items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Demo Product',
                'description' => 'Demo Product Description',
                'image' => '2023-08-16-64dca91404b64.png',
                'category_id' => 2,
                'category_ids' => '[{"id":"1","position":1},{"id":"2","position":2}]',
                'variations' => '[]',
                'add_ons' => '[]',
                'attributes' => '[]',
                'choice_options' => '[]',
                'price' => '10.00',
                'tax' => '0.00',
                'tax_type' => 'percent',
                'discount' => '0.00',
                'discount_type' => 'percent',
                'available_time_starts' => '00:00:00',
                'available_time_ends' => '23:59:59',
                'veg' => 0,
                'status' => 1,
                'store_id' => 1,
                'created_at' => '2023-08-16 02:46:44',
                'updated_at' => '2023-08-16 03:00:05',
                'order_count' => 0,
                'avg_rating' => 0.0,
                'rating_count' => 0,
                'rating' => NULL,
                'module_id' => 1,
                'stock' => 10,
                'unit_id' => NULL,
                'images' => '["2023-08-16-64dca9140233e.png","2023-08-16-64dcac358a7ea.png"]',
                'food_variations' => '[]',
                'slug' => 'demo-product',
                'recommended' => 0,
                'organic' => 1,
                'maximum_cart_quantity' => 2,
                'is_approved' => 1,
            ),
        ));
        
        
    }
}