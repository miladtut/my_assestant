<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GuestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('guests')->delete();
        
        
        
    }
}