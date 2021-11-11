<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => NULL,
                'name' => 'Manuel Cabrera Vivas',
                'email' => 'viprestal@hotmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CPowbZkC4gCzn2TZ2hFpB.WXh0LOFUOnuUQQNVgjj4riSiVm1AsZq',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-11-02 18:32:15',
                'updated_at' => '2021-11-02 18:32:15',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'Manolo Admin',
                'email' => 'mcabrera@vipresinmobiliaria.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EXHiKJqJjhL6RmSBImsnvuUBRqCPCpjsqVzl7bssorrsqWQpkjd2W',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-11-04 11:24:19',
                'updated_at' => '2021-11-04 11:25:50',
            ),
        ));
        
        
    }
}