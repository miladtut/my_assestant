<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminWalletsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_wallets')->delete();
        
        
        
    }
}