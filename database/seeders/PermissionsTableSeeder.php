<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-11-04 11:19:26',
                'updated_at' => '2021-11-04 11:19:26',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2021-11-04 11:19:27',
                'updated_at' => '2021-11-04 11:19:27',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2021-11-11 10:14:07',
                'updated_at' => '2021-11-11 10:14:07',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2021-11-11 10:14:07',
                'updated_at' => '2021-11-11 10:14:07',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2021-11-11 10:14:07',
                'updated_at' => '2021-11-11 10:14:07',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2021-11-11 10:14:07',
                'updated_at' => '2021-11-11 10:14:07',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2021-11-11 10:14:07',
                'updated_at' => '2021-11-11 10:14:07',
            ),
        ));
        
        
    }
}