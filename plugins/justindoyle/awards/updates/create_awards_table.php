<?php namespace JustinDoyle\Awards\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAwardsTable extends Migration
{

    public function up()
    {
        Schema::create('justindoyle_awards_awards', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('name_fr');
            $table->string('url');
            $table->string('eligibility');
            $table->string('eligibility_fr');
            $table->string('objective');
            $table->string('objective_fr');
            $table->string('value');
            $table->string('value_fr');
            $table->string('deadline');
            $table->string('deadline_fr');
            $table->boolean('anyone')->default(0);
            $table->boolean('phd')->default(0);
            $table->boolean('pdf')->default(0);
            $table->boolean('student')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('justindoyle_awards_awards');
    }

}
