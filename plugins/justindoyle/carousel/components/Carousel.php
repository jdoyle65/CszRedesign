<?php namespace JustinDoyle\Carousel\Components;

use Cms\Classes\ComponentBase;

class Carousel extends ComponentBase {
    public function componentDetails()
    {
        return [
            'name' => 'Carousel',
            'description' => 'Displays a Twitter Bootstrap carousel.'
        ];
    }

    public function slides() {
        return [
            [
                'image' => 'http://placehold.it/1920x900',
                'title' => 'Test 1',
                'description' => 'This is a test'
            ],
            [
                'image' => 'http://placehold.it/1920x900',
                'title' => 'Test 2',
                'description' => 'This is a test'
            ],
            [
                'image' => 'http://placehold.it/1920x900',
                'title' => 'Test 3',
                'description' => 'This is a test'
            ]
        ];
    }
}