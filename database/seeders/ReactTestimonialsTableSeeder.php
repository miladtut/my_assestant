<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReactTestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('react_testimonials')->delete();
        
        \DB::table('react_testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'John Doe',
                'designation' => 'CTO',
                'review' => 'Very good Service.',
                'reviewer_image' => '2023-08-16-64dcad86217a2.png',
                'company_image' => 'def.png',
                'status' => 1,
                'created_at' => '2023-08-16 03:05:42',
                'updated_at' => '2023-08-16 03:05:42',
            ),
        ));
        
        
    }
}