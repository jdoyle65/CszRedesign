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
}