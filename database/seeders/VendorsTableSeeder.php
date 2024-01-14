<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vendors')->delete();
        
        \DB::table('vendors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'f_name' => 'Demo',
                'l_name' => 'Store',
                'phone' => '+101511111111',
                'email' => 'demo.store@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Rtm/6/dNJwwRZcfUAjCNdezs3xCwTN1oTW/2mqrRBZkGqHHZAqcuW',
                'remember_token' => NULL,
                'created_at' => '2023-08-16 02:45:01',
                'updated_at' => '2023-08-16 02:45:01',
                'bank_name' => NULL,
                'branch' => NULL,
                'holder_name' => NULL,
                'account_no' => NULL,
                'image' => NULL,
                'status' => 1,
                'firebase_token' => NULL,
                'auth_token' => NULL,
            ),
        ));
        
        
    }
}