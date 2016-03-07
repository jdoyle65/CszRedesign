<?php namespace JustinDoyle\Contacts\Updates;

use Seeder;
use JustinDoyle\Contacts\Models\Contact;
use JustinDoyle\Contacts\Models\Category;

class SeedContactsTable extends Seeder {

    public function run() {
        $executive = Category::create([
            'title_en' => 'Executive',
            'title_fr' => 'Exécutif'
        ]);
        $councilors = Category::create([
            'title_en' => 'Councillors',
            'title_fr' => 'Conseillers'
        ]);
        $studentCouncilors = Category::create([
            'title_en' => 'Student Councillors',
            'title_fr' => 'Conseillers étudiants'
        ]);

        Contact::create([
            'title_en' => 'Past President',
            'title_fr' => 'Président antérieur',
            'category_id' => $executive->id,
            'name' => 'Suzie Currie',
            'address_line_one' => 'Mount Allison Univ., Biology',
            'address_line_two' => '63B York St',
            'city' => 'Sackville',
            'province' => 'NB',
            'postal_code' => 'E4L 3G7',
            'email' => 'scurrie@mta.ca',
            'work_phone' => '506-364-2260',
            'profile_image' => 'profile_female.jpg',
        ]);
        Contact::create([
            'title_en' => 'President',
            'title_fr' => 'Président',
            'category_id' => $executive->id,
            'name' => 'James Staples',
            'address_line_one' => 'Western Univ., Biology',
            'address_line_two' => '1151 Richmond St',
            'city' => 'London',
            'province' => 'ON',
            'postal_code' => 'N6A 5B8',
            'email' => 'jfstaple@uwo.ca',
            'work_phone' => '519-661-4057',
            'profile_image' => 'profile_male.jpg',
        ]);

        Contact::create([
            'title_en' => 'Secretary',
            'title_fr' => 'Secrétaire',
            'category_id' => $executive->id,
            'name' => 'Helga Guderley',
            'address_line_one' => 'Université Laval, Département de biologie',
            'email' => 'helga.guderley@bio.ulaval.ca',
            'work_phone' => '902-820-2979',
            'profile_image' => 'profile_female.jpg',
        ]);
        Contact::create([
            'title_en' => 'Councillor Retiring May 2016',
            'title_fr' => 'Conseiller dont le mandat se terminera en mai 2016',
            'category_id' => $studentCouncilors->id,
            'name' => 'Laura Ferguson',
            'address_line_one' => 'Western University',
            'address_line_two' => '1151 Richmond St',
            'city' => 'London',
            'province' => 'ON',
            'postal_code' => 'N6A 5B8',
            'email' => 'lfergus9@uwo.ca',
            'work_phone' => '902-799-9726',
            'profile_image' => 'profile_female.jpg',
        ]);
        Contact::create([
            'title_en' => 'Councillor Retiring May 2017',
            'title_fr' => 'Conseiller dont le mandat se terminera en mai 2017',
            'category_id' => $studentCouncilors->id,
            'name' => 'Dillon Chung',
            'address_line_one' => 'Univ. British Columbia, Zoology',
            'address_line_two' => '6270 University Blvd',
            'city' => 'Vancouver',
            'province' => 'BC',
            'postal_code' => 'V6T 1Z4',
            'email' => 'dchungch@zoology.ubc.ca',
            'work_phone' => '604-779-7754',
            'profile_image' => 'profile_male.jpg',
        ]);


    }
}