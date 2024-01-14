<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'f_name' => 'Test',
                'l_name' => 'Admin',
                'phone' => '01500000000',
                'email' => 'admin@admin.com',
                'image' => NULL,
                'password' => '$2y$10$VfktRD62HSKO2/wOHDFyKO04d0nFtE6UtMpb5o/l8QSWE0uC/WLni',
                'remember_token' => NULL,
                'created_at' => '2023-08-17 02:34:18',
                'updated_at' => '2023-08-17 02:34:18',
                'role_id' => 1,
                'zone_id' => NULL,
                'is_logged_in' => 1,
            ),
        ));
        
        
    }
}