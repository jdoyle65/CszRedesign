<?php namespace JustinDoyle\Carousel\Updates;

use Seeder;
use JustinDoyle\Carousel\Models\Carousel;
use JustinDoyle\Carousel\Models\CarouselImage;

class SeedCarouselsTable extends Seeder {
    public function run() {
        $carousel = Carousel::create([
            'name' => 'Test Carousel'
        ]);

        CarouselImage::create([
            'image_url' => 'cszlogo.png',
            'title_en' => 'Hello',
            'title_fr' => 'Bonjour',
            'description_en' => 'That is good.',
            'description_fr' => 'Ca c\'est bon.',
            'link_out' => '#',
            'carousel_id' => $carousel->id
        ]);
        CarouselImage::create([
            'image_url' => 'cszlogo.png',
            'title_en' => 'Two',
            'title_fr' => 'Deux',
            'description_en' => 'How are you?',
            'description_fr' => 'Comment ca va?',
            'link_out' => '#',
            'carousel_id' => $carousel->id
        ]);

        $carousel = Carousel::create([
            'name' => 'Test Carousel 2'
        ]);

        CarouselImage::create([
            'image_url' => 'cszlogo.png',
            'title_en' => 'Hmmm',
            'title_fr' => 'Hmmm',
            'description_en' => 'That is good.',
            'description_fr' => 'Ca c\'est bon.',
            'link_out' => '#',
            'carousel_id' => $carousel->id
        ]);
        CarouselImage::create([
            'image_url' => 'cszlogo.png',
            'title_en' => 'Yes',
            'title_fr' => 'Oui',
            'description_en' => 'How are you?',
            'description_fr' => 'Comment ca va?',
            'link_out' => '#',
            'carousel_id' => $carousel->id
        ]);
    }
}