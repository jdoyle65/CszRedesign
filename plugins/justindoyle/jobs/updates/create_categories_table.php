<?php namespace JustinDoyle\Jobs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('justindoyle_jobs_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title_en');
            $table->string('title_fr');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('justindoyle_jobs_categories');
    }

}
