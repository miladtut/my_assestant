<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthPersonalAccessClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_personal_access_clients')->delete();
        
        \DB::table('oauth_personal_access_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'client_id' => 1,
                'created_at' => '2021-08-19 23:44:50',
                'updated_at' => '2021-08-19 23:44:50',
            ),
            1 => 
            array (
                'id' => 2,
                'client_id' => 3,
                'created_at' => '2022-01-05 12:22:36',
                'updated_at' => '2022-01-05 12:22:36',
            ),
        ));
        
        
    }
}