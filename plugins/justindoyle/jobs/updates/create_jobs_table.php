<?php namespace JustinDoyle\Jobs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateJobsTable extends Migration
{

    public function up()
    {
        Schema::create('justindoyle_jobs_jobs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title_en');
            $table->string('title_fr');
            $table->string('institution_en');
            $table->string('institution_fr');
            $table->string('level_en');
            $table->string('level_fr');
            $table->datetime('closing')->nullable();
            $table->integer('order')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('justindoyle_jobs_jobs');
    }

}
