<?php namespace JustinDoyle\Contacts\Updates;

use Seeder;
use JustinDoyle\Contacts\Models\Contact;
use JustinDoyle\Contacts\Models\Category;

class SeedContactsTable extends Seeder {

    public function run() {
        $category = Category::create([
            'title_en' => 'Executive',
            'title_fr' => 'Executive'
        ]);

        $contact = Contact::create([
            'title_en' => 'President',
            'title_fr' => 'Président',
            'category_id' => $category->id,
            'name' => 'Jane Doe',
            'address_line_one' => '555 Fake St',
            'city' => 'London',
            'province' => 'ON',
            'email' => 'jane@example.com',
            'work_phone' => '(905) 555-1234',
            'profile_image' => 'profile_female.jpg',
        ]);
    }
}