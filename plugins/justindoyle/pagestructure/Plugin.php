<?php namespace JustinDoyle\PageStructure;

use System\Classes\PluginBase;
use Event;
use Backend;

class Plugin extends PluginBase
{
    public function boot()
    {
        Event::listen('cms.template.save', 'JustinDoyle\PageStructure\TemplateSaveHandler');
    }

    public function pluginDetails()
    {
        return [
            'name' => 'Page Struct',
            'description' => 'Listen for template.save Events to build out the page structure being used in CSZ Redesign.',
            'author' => 'Justin Doyle',
            'icon' => 'icon-camera-retro'
        ];
    }

    public function registerNavigation()
    {
        return [
            'pagestructure' => [
                'label' => 'Generate Page',
                'url' => Backend::url('justindoyle/pagestructure/pagestructure/create'),
                'icon' => 'icon-plus',
                'order' => 10
            ]
        ];
    }
}