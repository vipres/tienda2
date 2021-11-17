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
                'role_id' => 1,
                'name' => 'Manuel Cabrera Vivas',
                'email' => 'viprestal@hotmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EXHiKJqJjhL6RmSBImsnvuUBRqCPCpjsqVzl7bssorrsqWQpkjd2W',
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
            2 =>
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Vendedor',
                'email' => 'vendedor@vendedor.es',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EXHiKJqJjhL6RmSBImsnvuUBRqCPCpjsqVzl7bssorrsqWQpkjd2W',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-11-11 16:41:20',
                'updated_at' => '2021-11-11 18:31:35',
            ),
            3 =>
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Vendedor 2',
                'email' => 'vendedor2@vendedor2.es',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EXHiKJqJjhL6RmSBImsnvuUBRqCPCpjsqVzl7bssorrsqWQpkjd2W',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-11-12 11:55:15',
                'updated_at' => '2021-11-12 11:56:13',
            ),
            4 =>
            array (
                'id' => 5,
                'role_id' => 2,
                'name' => 'Cliente 1',
                'email' => 'cliente@cliente.es',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EXHiKJqJjhL6RmSBImsnvuUBRqCPCpjsqVzl7bssorrsqWQpkjd2W',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-11-12 11:55:15',
                'updated_at' => '2021-11-12 11:56:13',
            ),
            5 =>
            array (
                'id' => 6,
                'role_id' => 2,
                'name' => 'Cliente 2',
                'email' => 'cliente2@cliente.es',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EXHiKJqJjhL6RmSBImsnvuUBRqCPCpjsqVzl7bssorrsqWQpkjd2W',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-11-12 11:55:15',
                'updated_at' => '2021-11-12 11:56:13',
            ),
        ));


    }
}
