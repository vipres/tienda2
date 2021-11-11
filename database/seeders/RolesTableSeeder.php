<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrador',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Usuario Normal',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
        ));
        
        
    }
}