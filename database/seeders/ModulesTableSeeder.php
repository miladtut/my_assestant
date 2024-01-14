<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('modules')->delete();
        
        \DB::table('modules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'module_name' => 'Demo Module',
                'module_type' => 'grocery',
                'thumbnail' => '2023-08-16-64dca575bf3a9.png',
                'status' => 1,
                'stores_count' => 1,
                'created_at' => '2023-08-16 02:31:17',
                'updated_at' => '2023-08-16 02:45:01',
                'icon' => '2023-08-16-64dca575bc1c2.png',
                'theme_id' => 1,
                'description' => '<p>Demo module description.</p>',
                'all_zone_service' => 0,
            ),
        ));
        
        
    }
}