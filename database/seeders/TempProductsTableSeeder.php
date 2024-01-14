<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TempProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('temp_products')->delete();
        
        
        
    }
}