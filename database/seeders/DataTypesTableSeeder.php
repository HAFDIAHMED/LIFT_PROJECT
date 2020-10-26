<?php

namespace Database\Seeders;
use \Illuminate\Database\Seeder;


class DataTypesTableSeeder extends Seeder
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
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'created_at' => '2020-09-15 10:23:45',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Users',
                'display_name_singular' => 'User',
                'generate_permissions' => 1,
                'icon' => 'voyager-person',
                'id' => 1,
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'name' => 'users',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'server_side' => 0,
                'slug' => 'users',
                'updated_at' => '2020-09-15 10:23:45',
            ),
            1 =>
            array (
                'controller' => '',
                'created_at' => '2020-09-15 10:23:45',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Menus',
                'display_name_singular' => 'Menu',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 2,
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'name' => 'menus',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'menus',
                'updated_at' => '2020-09-15 10:23:45',
            ),
            2 =>
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'created_at' => '2020-09-15 10:23:45',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Roles',
                'display_name_singular' => 'Role',
                'generate_permissions' => 1,
                'icon' => 'voyager-lock',
                'id' => 3,
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'name' => 'roles',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'roles',
                'updated_at' => '2020-09-15 10:23:45',
            ),
            3 =>
            array (
                'controller' => NULL,
                'created_at' => '2020-09-15 16:23:01',
                'description' => NULL,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Countries',
                'display_name_singular' => 'Country',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 8,
                'model_name' => 'App\\Country',
                'name' => 'country',
                'policy_name' => NULL,
                'server_side' => 1,
                'slug' => 'country',
                'updated_at' => '2020-09-15 18:03:40',
            ),
            4 =>
            array (
                'controller' => NULL,
                'created_at' => '2020-09-15 18:28:57',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Countries',
                'display_name_singular' => 'Country',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 9,
                'model_name' => 'App\\Country',
                'name' => 'countries',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'countries',
                'updated_at' => '2020-09-15 23:35:01',
            ),
            5 =>
            array (
                'controller' => NULL,
                'created_at' => '2020-09-15 18:39:01',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Realisations',
                'display_name_singular' => 'Realisation',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 10,
                'model_name' => 'App\\Realisation',
                'name' => 'realisations',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'realisations',
                'updated_at' => '2020-09-15 19:59:41',
            ),
            6 =>
            array (
                'controller' => NULL,
                'created_at' => '2020-09-15 19:20:15',
                'description' => NULL,
                'details' => '{"order_column":"id","order_display_column":"email","order_direction":"asc","default_search_key":"email"}',
                'display_name_plural' => 'Contacts',
                'display_name_singular' => 'Contact',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 11,
                'model_name' => 'App\\Contact',
                'name' => 'contacts',
                'policy_name' => NULL,
                'server_side' => 1,
                'slug' => 'contacts',
                'updated_at' => '2020-09-15 19:20:15',
            ),
            7 =>
            array (
                'controller' => NULL,
                'created_at' => '2020-09-15 23:27:28',
                'description' => NULL,
                'details' => '{"order_column":"id","order_display_column":"email","order_direction":"asc","default_search_key":"email","scope":null}',
                'display_name_plural' => 'Devis',
                'display_name_singular' => 'Devis',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 12,
                'model_name' => 'App\\Devis',
                'name' => 'devis',
                'policy_name' => NULL,
                'server_side' => 1,
                'slug' => 'devis',
                'updated_at' => '2020-09-16 12:11:30',
            ),
        ));


    }
}
