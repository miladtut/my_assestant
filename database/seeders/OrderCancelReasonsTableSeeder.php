<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderCancelReasonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_cancel_reasons')->delete();
        
        
        
    }
}