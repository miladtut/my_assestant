<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Demo category',
                'image' => '2023-08-16-64dca78f6ba7b.png',
                'parent_id' => 0,
                'position' => 0,
                'status' => 1,
                'created_at' => '2023-08-16 02:40:15',
                'updated_at' => '2023-08-16 02:40:30',
                'priority' => 0,
                'module_id' => 1,
                'slug' => 'demo-category',
                'featured' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Demo sub category',
                'image' => 'def.png',
                'parent_id' => 1,
                'position' => 1,
                'status' => 1,
                'created_at' => '2023-08-16 02:40:51',
                'updated_at' => '2023-08-16 02:40:51',
                'priority' => 0,
                'module_id' => 1,
                'slug' => 'demo-sub-category',
                'featured' => 0,
            ),
        ));
        
        
    }
}