<?php namespace JustinDoyle\Carousel;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
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

    public function registerNavigation()
    {
        return [
            'index' => [
                'label' => 'Carousels',
                'url' => Backend::url('justindoyle/carousel/carousels/index'),
                'icon' => 'icon-pencil',
                'permissions' => ['justindoyle.carousel.*'],
                'order' => 500,

                'sideMenu' => [
//                    'posts' => [
//                        'label' => 'Posts',
//                        'icon' => 'icon-copy',
//                        'url' => Backend::url('acme/blog/posts'),
//                        'permissions' => ['acme.blog.access_posts']
//                    ],
//                    'categories' => [
//                        'label' => 'Categories',
//                        'icon' => 'icon-copy',
//                        'url' => Backend::url('acme/blog/categories'),
//                        'permissions' => ['acme.blog.access_categories']
//                    ]
                ]
            ]
        ];
    }
}