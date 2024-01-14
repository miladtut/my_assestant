<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => NULL,
                'name' => 'Laravel Personal Access Client',
                'secret' => 'qBN0j6SW6nIf47748tgxaKxnqKqCacTxa6gii8yc',
                'provider' => NULL,
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2021-08-19 23:44:50',
                'updated_at' => '2021-08-19 23:44:50',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => NULL,
                'name' => 'Laravel Password Grant Client',
                'secret' => 'oqQ90HOU0egjgQ01LRzHo9rADUavq16jzWm1TrjT',
                'provider' => 'users',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2021-08-19 23:44:50',
                'updated_at' => '2021-08-19 23:44:50',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => NULL,
                'name' => 'stackfood Personal Access Client',
                'secret' => 'iRxXixYp4CDo7TWbWNCMelAUwgtScaEMGudnbHQk',
                'provider' => NULL,
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2022-01-05 12:22:36',
                'updated_at' => '2022-01-05 12:22:36',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => NULL,
                'name' => 'stackfood Password Grant Client',
                'secret' => 'FzGJ1vSlbfGP2mWqF6V575QgVCEfbBHVNA41ApeC',
                'provider' => 'users',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2022-01-05 12:22:36',
                'updated_at' => '2022-01-05 12:22:36',
            ),
        ));
        
        
    }
}