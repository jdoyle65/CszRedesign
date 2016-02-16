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
            'image_url' => '/csz-chick.jpg',
            'title_en' => 'Lorem ipsum dolor sit amet',
            'title_fr' => 'Lorem ipsum dolor sit amet Francais',
            'description_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a urna erat. Maecenas posuere mattis arcu. Sed ac sapien eleifend, pretium diam vitae, commodo erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque ut neque nec tellus consectetur malesuada. Aenean quis tellus purus. Nullam quis quam et mi iaculis maximus quis in arcu.',
            'description_fr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a urna erat. Maecenas posuere mattis arcu. Sed ac sapien eleifend, pretium diam vitae, commodo erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque ut neque nec tellus consectetur malesuada. Aenean quis tellus purus. Nullam quis quam et mi iaculis maximus quis in arcu.',
            'link_out' => '#',
            'carousel_id' => $carousel->id
        ]);
        CarouselImage::create([
            'image_url' => '/csz-pig.jpeg',
            'title_en' => 'Lorem ipsum dolor sit amet Two',
            'title_fr' => 'Lorem ipsum dolor sit amet Deux',
            'description_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a urna erat. Maecenas posuere mattis arcu. Sed ac sapien eleifend, pretium diam vitae, commodo erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque ut neque nec tellus consectetur malesuada. Aenean quis tellus purus. Nullam quis quam et mi iaculis maximus quis in arcu.',
            'description_fr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a urna erat. Maecenas posuere mattis arcu. Sed ac sapien eleifend, pretium diam vitae, commodo erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque ut neque nec tellus consectetur malesuada. Aenean quis tellus purus. Nullam quis quam et mi iaculis maximus quis in arcu.',
            'link_out' => '#',
            'carousel_id' => $carousel->id
        ]);
    }
}