<?php namespace JustinDoyle\Contacts;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Manage Contact for Contact page',
            'description' => 'An easy way to manage a list of contacts.',
            'author' => 'Justin Doyle',
            'icon' => 'icon-users'
        ];
    }

    public function registerPermissions()
    {
        return [
            'justindoyle.contacts.manage' => [
                'label' => 'Manage Contacts',
                'tab' => 'JustinDoyle Contacts'
            ]
        ];
    }

    public function registerComponents()
    {
//        return [
//            'JustinDoyle\Carousel\Components\Carousel' => 'carousel'
//        ];
    }

    public function registerNavigation()
    {
        return [
            'index' => [
                'label' => 'Contacts',
                'url' => Backend::url('justindoyle/contacts/contacts/index'),
                'icon' => 'icon-users',
                'permissions' => ['justindoyle.contacts.*'],
                'order' => 20,

                'sideMenu' => [
                    'contacts' => [
                        'label' => 'Contacts',
                        'url' => Backend::url('justindoyle/contacts/contacts/index'),
                        'icon' => 'icon-users',
                        'permissions' => ['justindoyle.contacts.*']
                    ],
                    'categories' => [
                        'label' => 'Categories',
                        'url' => Backend::url('justindoyle/contacts/categories/index'),
                        'icon' => 'icon-sitemap',
                        'permissions' => ['justindoyle.contacts.*']
                    ]
                ]
            ]
        ];
    }
}