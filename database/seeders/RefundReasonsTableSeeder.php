<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RefundReasonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('refund_reasons')->delete();
        
        \DB::table('refund_reasons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'reason' => 'I ordered the wrong food',
                'status' => 1,
                'created_at' => '2023-08-17 02:39:23',
                'updated_at' => '2023-08-17 02:39:23',
            ),
        ));
        
        
    }
}