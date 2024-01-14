<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminPromotionalBannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_promotional_banners')->delete();
        
        \DB::table('admin_promotional_banners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Demo Title',
                'sub_title' => 'Demo Promotional Subtitle',
                'image' => '2023-08-16-64dca9d76d4f4.png',
                'status' => 1,
                'created_at' => '2023-08-16 02:49:59',
                'updated_at' => '2023-08-16 02:49:59',
            ),
        ));
        
        
    }
}