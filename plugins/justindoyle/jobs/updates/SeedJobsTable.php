<?php namespace JustinDoyle\Jobs\Updates;

use Carbon\Carbon;
use JustinDoyle\Jobs\Models\Category;
use JustinDoyle\Jobs\Models\Job;
use Seeder;

class SeedJobsTable extends Seeder {

    public function run() {
        Category::create([
            'id' => 1,
            'title_en' => 'Faculty',
            'title_fr' => 'Faculty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Job::create([
            'id' => 1,
            'title_en' => 'Test Job',
            'title_fr' => 'Test Job Fr',
            'institution_en' => 'UBC',
            'institution_fr' => 'UBC',
            'level_en' => 'PhD',
            'level_fr' => 'PhD',
            'closing' => Carbon::now(),
            'link_out' => 'http://www.google.ca',
            'category_id' => 1,
            'order' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}