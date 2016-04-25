<?php namespace JustinDoyle\Awards;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Manage Awards for Awards page',
            'description' => 'An easy way to manage a list of awards.',
            'author' => 'Justin Doyle',
            'icon' => 'icon-users'
        ];
    }

    public function registerPermissions()
    {
        return [
            'justindoyle.awards.manage' => [
                'label' => 'Manage Awards',
                'tab' => 'JustinDoyle Awards'
            ]
        ];
    }


    public function registerNavigation()
    {
        return [
            'index' => [
                'label' => 'Awards',
                'url' => Backend::url('justindoyle/awards/awards/index'),
                'icon' => 'icon-users',
                'permissions' => ['justindoyle.awards.*'],
                'order' => 20,

                'sideMenu' => [
                    'contacts' => [
                        'label' => 'Awards',
                        'url' => Backend::url('justindoyle/awards/awards/index'),
                        'icon' => 'icon-users',
                        'permissions' => ['justindoyle.awards.*']
                    ]
                ]
            ]
        ];
    }
}