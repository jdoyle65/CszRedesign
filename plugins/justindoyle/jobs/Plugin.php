<?php namespace JustinDoyle\Jobs;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Manage Job for Jobs page',
            'description' => 'An easy way to manage a list of jobs.',
            'author' => 'Justin Doyle',
            'icon' => 'icon-briefcase'
        ];
    }

    public function registerPermissions()
    {
        return [
            'justindoyle.jobs.manage' => [
                'label' => 'Manage Jobs',
                'tab' => 'JustinDoyle Jobs'
            ]
        ];
    }

    public function registerComponents()
    {}

    public function registerNavigation()
    {
        return [
            'index' => [
                'label' => 'Jobs',
                'url' => Backend::url('justindoyle/jobs/jobs/index'),
                'icon' => 'icon-briefcase',
                'permissions' => ['justindoyle.jobs.*'],
                'order' => 20,

                'sideMenu' => [
                    'contacts' => [
                        'label' => 'Jobs',
                        'url' => Backend::url('justindoyle/jobs/jobs/index'),
                        'icon' => 'icon-briefcase',
                        'permissions' => ['justindoyle.jobs.*']
                    ],
                    'categories' => [
                        'label' => 'Categories',
                        'url' => Backend::url('justindoyle/jobs/categories/index'),
                        'icon' => 'icon-sitemap',
                        'permissions' => ['justindoyle.jobs.*']
                    ]
                ]
            ]
        ];
    }
}