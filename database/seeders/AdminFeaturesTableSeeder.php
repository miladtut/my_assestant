<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminFeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_features')->delete();
        
        \DB::table('admin_features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Demo Feature Title',
                'sub_title' => 'Demo Feature  Sub Title',
                'image' => '2023-08-16-64dcaa268d2d0.png',
                'status' => 1,
                'created_at' => '2023-08-16 02:51:18',
                'updated_at' => '2023-08-16 02:51:18',
            ),
        ));
        
        
    }
}