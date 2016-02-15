<?php namespace JustinDoyle\Carousel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCarouselImagesTable extends Migration
{

    public function up()
    {
        Schema::create('justindoyle_carousel_carousel_images', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('image_url');
            $table->string('title_en');
            $table->string('title_fr');
            $table->string('description_en')->nullable();
            $table->string('description_fr')->nullable();
            $table->string('link_out');
            $table->integer('carousel_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('justindoyle_carousel_carousel_images');
    }

}
