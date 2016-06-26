<?php namespace JustinDoyle\UserImport;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'User Importer',
            'description' => 'Import user details from Excel sheet',
            'author' => 'Justin Doyle',
            'icon' => 'icon-users'
        ];
    }

    public function registerPermissions()
    {
        return [
            'justindoyle.userimport.manage' => [
                'label' => 'Manage User Import',
                'tab' => 'JustinDoyle User Import'
            ]
        ];
    }


    public function registerNavigation()
    {
        return [
            'index' => [
                'label' => 'Import',
                'url' => Backend::url('justindoyle/userimport/import/index'),
                'icon' => 'icon-users',
                'permissions' => ['justindoyle.userimport.*'],
                'order' => 20,

                'sideMenu' => [
                    'contacts' => [
                        'label' => 'Import',
                        'url' => Backend::url('justindoyle/userimport/import/index'),
                        'icon' => 'icon-users',
                        'permissions' => ['justindoyle.userimport.*']
                    ]
                ]
            ]
        ];
    }
}