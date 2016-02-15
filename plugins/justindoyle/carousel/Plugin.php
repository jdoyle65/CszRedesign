<?php namespace JustinDoyle\Carousel;

use System\Classes\PluginBase;

class Plugin extends PluginBase {
    public function pluginDetails()
    {
        return [
            'name' => 'Bootstrap Carousel Plugin',
            'description' => 'Provides an easily editable Bootstrap component.',
            'author' => 'Justin Doyle',
            'icon' => 'icon-camera-retro'
        ];
    }

    public function registerComponents()
    {
        return [
            'JustinDoyle\Carousel\Components\Carousel' => 'carousel'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Carousel Settings',
                'description' => 'Manage carousel settings.',
                'category'    => 'Carousel',
                'icon'        => 'icon-cog',
                'class'       => 'JustinDoyle\Carousel\Models\Settings',
                'order'       => 200,
                'keywords'    => 'carousel',
//                'permissions' => ['justindoyle.users.access_settings']
            ]
        ];
    }
}