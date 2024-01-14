<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminTestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_testimonials')->delete();
        
        \DB::table('admin_testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'John Doe',
                'designation' => 'CTO',
                'review' => 'Very good service.',
                'reviewer_image' => '2023-08-16-64dcaae2e5bc0.png',
                'company_image' => '2023-08-16-64dcaae2eae2a.png',
                'status' => 1,
                'created_at' => '2023-08-16 02:54:26',
                'updated_at' => '2023-08-16 02:54:26',
            ),
        ));
        
        
    }
}