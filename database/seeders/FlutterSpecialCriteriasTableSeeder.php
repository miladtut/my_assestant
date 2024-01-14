<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FlutterSpecialCriteriasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('flutter_special_criterias')->delete();
        
        \DB::table('flutter_special_criterias')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Demo Feature Title',
                'image' => '2023-08-16-64dcae4ca0594.png',
                'status' => 1,
                'created_at' => '2023-08-16 03:09:00',
                'updated_at' => '2023-08-16 03:09:00',
            ),
        ));
        
        
    }
}