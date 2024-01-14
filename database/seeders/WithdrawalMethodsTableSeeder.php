<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WithdrawalMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('withdrawal_methods')->delete();
        
        
        
    }
}