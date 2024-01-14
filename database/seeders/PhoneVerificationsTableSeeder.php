<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhoneVerificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('phone_verifications')->delete();
        
        
        
    }
}