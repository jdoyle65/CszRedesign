<?php namespace JustinDoyle\Carousel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCarouselsTable extends Migration
{

    public function up()
    {
        Schema::create('justindoyle_carousel_carousels', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('justindoyle_carousel_carousels');
    }

}
