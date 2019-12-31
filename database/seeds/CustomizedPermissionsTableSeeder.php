<?php

use Illuminate\Database\Seeder;

class CustomizedPermissionsTableSeeder extends Seeder
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
                'created_at' => '2019-12-28 08:32:10',
                'updated_at' => '2019-12-28 08:32:10',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-12-28 08:32:10',
                'updated_at' => '2019-12-28 08:32:10',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-12-28 08:32:10',
                'updated_at' => '2019-12-28 08:32:10',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-12-28 08:32:10',
                'updated_at' => '2019-12-28 08:32:10',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-12-28 08:32:10',
                'updated_at' => '2019-12-28 08:32:10',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-12-28 08:32:10',
                'updated_at' => '2019-12-28 08:32:10',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-12-28 08:32:10',
                'updated_at' => '2019-12-28 08:32:10',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-12-28 08:32:11',
                'updated_at' => '2019-12-28 08:32:11',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-12-28 08:32:12',
                'updated_at' => '2019-12-28 08:32:12',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2019-12-28 08:32:15',
                'updated_at' => '2019-12-28 08:32:15',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_classes',
                'table_name' => 'classes',
                'created_at' => '2019-12-30 08:03:41',
                'updated_at' => '2019-12-30 08:03:41',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_classes',
                'table_name' => 'classes',
                'created_at' => '2019-12-30 08:03:41',
                'updated_at' => '2019-12-30 08:03:41',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_classes',
                'table_name' => 'classes',
                'created_at' => '2019-12-30 08:03:41',
                'updated_at' => '2019-12-30 08:03:41',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_classes',
                'table_name' => 'classes',
                'created_at' => '2019-12-30 08:03:41',
                'updated_at' => '2019-12-30 08:03:41',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_classes',
                'table_name' => 'classes',
                'created_at' => '2019-12-30 08:03:41',
                'updated_at' => '2019-12-30 08:03:41',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_class_sessions',
                'table_name' => 'class_sessions',
                'created_at' => '2019-12-30 08:24:40',
                'updated_at' => '2019-12-30 08:24:40',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_class_sessions',
                'table_name' => 'class_sessions',
                'created_at' => '2019-12-30 08:24:40',
                'updated_at' => '2019-12-30 08:24:40',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_class_sessions',
                'table_name' => 'class_sessions',
                'created_at' => '2019-12-30 08:24:40',
                'updated_at' => '2019-12-30 08:24:40',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_class_sessions',
                'table_name' => 'class_sessions',
                'created_at' => '2019-12-30 08:24:40',
                'updated_at' => '2019-12-30 08:24:40',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_class_sessions',
                'table_name' => 'class_sessions',
                'created_at' => '2019-12-30 08:24:40',
                'updated_at' => '2019-12-30 08:24:40',
            ),
        ));
        
        
    }
}