<?php

use Illuminate\Database\Seeder;

class CustomizedDataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2019-12-28 08:32:07',
                'updated_at' => '2019-12-28 09:55:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-12-28 08:32:07',
                'updated_at' => '2019-12-28 08:32:07',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-12-28 08:32:08',
                'updated_at' => '2019-12-28 08:32:08',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'classes',
                'slug' => 'classes',
                'display_name_singular' => 'Class',
                'display_name_plural' => 'Classes',
                'icon' => 'voyager-study',
                'model_name' => 'App\\ClassStudy',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-12-30 08:03:39',
                'updated_at' => '2019-12-30 08:03:39',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'class_sessions',
                'slug' => 'class-sessions',
                'display_name_singular' => 'Class Session',
                'display_name_plural' => 'Class Sessions',
                'icon' => 'voyager-chat',
                'model_name' => 'App\\ClassSession',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-12-30 08:24:40',
                'updated_at' => '2019-12-30 08:34:28',
            ),
        ));
        
        
    }
}