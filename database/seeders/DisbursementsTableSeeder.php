<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DisbursementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('disbursements')->delete();
        
        
        
    }
}