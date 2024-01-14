<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSpecialCriteriasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_special_criterias')->delete();
        
        \DB::table('admin_special_criterias')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Demo Title',
                'image' => '2023-08-16-64dcaaa5b0d37.png',
                'status' => 1,
                'created_at' => '2023-08-16 02:53:25',
                'updated_at' => '2023-08-16 02:53:25',
            ),
        ));
        
        
    }
}