<?php namespace JustinDoyle\Carousel\Components;

use Cms\Classes\ComponentBase;
use RainLab\Translate\Classes\Translator;

class Carousel extends ComponentBase {

    public $selectedCarousel;

    private $carousel;

    public function componentDetails()
    {
        return [
            'name' => 'Carousel',
            'description' => 'Displays a Twitter Bootstrap carousel.'
        ];
    }

    public function defineProperties()
    {
        $carousels = \JustinDoyle\Carousel\Models\Carousel::all();
        $carouselOptions = [];
        foreach($carousels as $carousel) {
            $carouselOptions[$carousel->id] = $carousel->name;
        }

        return [
            'selected_carousel' => [
                'title'       => 'Selected Carousel',
                'type'        => 'dropdown',
                'default'     => '',
                'placeholder' => 'Select a carousel...',
                'options'     => $carouselOptions
            ]
        ];
    }

    public function init()
    {

    }

    public function onRun()
    {
        $selectedCarousel = $this->property('selected_carousel', null);
        if($selectedCarousel !== null) {
            $this->carousel = \JustinDoyle\Carousel\Models\Carousel::find($selectedCarousel);
        } else {
            $this->carousel = \JustinDoyle\Carousel\Models\Carousel::first();
        }
    }


    public function slides() {

        $translator = Translator::instance();
        $fr = $translator->getLocale()=='fr';
        $slides = [];

        foreach($this->carousel->images()->get() as $image) {
            $slide = [
                'image' => '/storage/app/media'.$image->image_url,
//                'image' => 'http://placehold.it/1920x900/77DD77/ffffff',
                'title' => $fr?$image->title_fr:$image->title_en,
                'description' => $fr?$image->description_fr:$image->description_en
            ];
            $slides[] = $slide;
        }

        return $slides;
    }
}