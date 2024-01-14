<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_tag')->delete();
        
        
        
    }
}