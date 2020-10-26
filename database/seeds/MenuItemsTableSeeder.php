<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 10:23:45',
                'icon_class' => 'voyager-boat',
                'id' => 1,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.dashboard',
                'target' => '_self',
                'title' => 'Dashboard',
                'updated_at' => '2020-09-15 10:23:45',
                'url' => '',
            ),
            1 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 10:23:45',
                'icon_class' => 'voyager-images',
                'id' => 2,
                'menu_id' => 1,
                'order' => 8,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.media.index',
                'target' => '_self',
                'title' => 'Media',
                'updated_at' => '2020-09-15 23:27:44',
                'url' => '',
            ),
            2 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 10:23:45',
                'icon_class' => 'voyager-person',
                'id' => 3,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.users.index',
                'target' => '_self',
                'title' => 'Users',
                'updated_at' => '2020-09-15 10:23:45',
                'url' => '',
            ),
            3 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 10:23:45',
                'icon_class' => 'voyager-lock',
                'id' => 4,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.roles.index',
                'target' => '_self',
                'title' => 'Roles',
                'updated_at' => '2020-09-15 10:23:45',
                'url' => '',
            ),
            4 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 10:23:45',
                'icon_class' => 'voyager-tools',
                'id' => 5,
                'menu_id' => 1,
                'order' => 9,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Tools',
                'updated_at' => '2020-09-15 23:27:43',
                'url' => '',
            ),
            5 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 10:23:45',
                'icon_class' => 'voyager-list',
                'id' => 6,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.menus.index',
                'target' => '_self',
                'title' => 'Menu Builder',
                'updated_at' => '2020-09-15 18:22:27',
                'url' => '',
            ),
            6 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 10:23:45',
                'icon_class' => 'voyager-data',
                'id' => 7,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.database.index',
                'target' => '_self',
                'title' => 'Database',
                'updated_at' => '2020-09-15 18:22:27',
                'url' => '',
            ),
            7 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 10:23:45',
                'icon_class' => 'voyager-compass',
                'id' => 8,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.compass.index',
                'target' => '_self',
                'title' => 'Compass',
                'updated_at' => '2020-09-15 18:22:27',
                'url' => '',
            ),
            8 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 10:23:45',
                'icon_class' => 'voyager-bread',
                'id' => 9,
                'menu_id' => 1,
                'order' => 4,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.bread.index',
                'target' => '_self',
                'title' => 'BREAD',
                'updated_at' => '2020-09-15 18:22:27',
                'url' => '',
            ),
            9 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 10:23:45',
                'icon_class' => 'voyager-settings',
                'id' => 10,
                'menu_id' => 1,
                'order' => 10,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.settings.index',
                'target' => '_self',
                'title' => 'Settings',
                'updated_at' => '2020-09-15 23:27:43',
                'url' => '',
            ),
            10 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 10:23:46',
                'icon_class' => 'voyager-hook',
                'id' => 11,
                'menu_id' => 1,
                'order' => 5,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.hooks',
                'target' => '_self',
                'title' => 'Hooks',
                'updated_at' => '2020-09-15 18:22:27',
                'url' => '',
            ),
            11 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 18:28:57',
                'icon_class' => NULL,
                'id' => 17,
                'menu_id' => 1,
                'order' => 7,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.countries.index',
                'target' => '_self',
                'title' => 'Countries',
                'updated_at' => '2020-09-15 23:27:50',
                'url' => '',
            ),
            12 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 18:39:01',
                'icon_class' => NULL,
                'id' => 18,
                'menu_id' => 1,
                'order' => 5,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.realisations.index',
                'target' => '_self',
                'title' => 'Realisations',
                'updated_at' => '2020-09-15 23:27:52',
                'url' => '',
            ),
            13 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 19:20:15',
                'icon_class' => NULL,
                'id' => 19,
                'menu_id' => 1,
                'order' => 4,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.contacts.index',
                'target' => '_self',
                'title' => 'Contacts',
                'updated_at' => '2020-09-15 23:27:52',
                'url' => '',
            ),
            14 => 
            array (
                'color' => NULL,
                'created_at' => '2020-09-15 23:27:28',
                'icon_class' => NULL,
                'id' => 20,
                'menu_id' => 1,
                'order' => 6,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.devis.index',
                'target' => '_self',
                'title' => 'Devis',
                'updated_at' => '2020-09-15 23:27:52',
                'url' => '',
            ),
        ));
        
        
    }
}