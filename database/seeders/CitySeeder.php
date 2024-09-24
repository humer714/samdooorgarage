<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [

            [
                'id' => 1,
                'title' => 'Richmond',
                'state_id' => 1,
                'slug' => Str::slug('Richmond'),
                'excerpt' => 'Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.',
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'image' => 'default.jpg',
                'contact_number' => '1234567890',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'twitter' => 'https://twitter.com/',
                'linkedIn' => 'https://www.linkedin.com/',
                'yelp' => 'https://www.yelp.com/',
                'yellow_pages' => 'https://www.yellowpages.com/',
                'google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101257.27957063806!2d-77.49326144999999!3d37.524660950000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b111095799c9ed%3A0xbfd83e6de2423cc5!2sRichmond%2C%20VA%2C%20USA!5e0!3m2!1sen!2s!4v1724777617847!5m2!1sen!2s',
                'meta_title' => 'Richmond',
                'meta_tag' => 'Richmond',
                'meta_description' => 'Richmond',
            ],

            [
                'id' => 2,
                'title' => 'Richmond Gandu',
                'state_id' => 2,
                'slug' => Str::slug('Richmond1'),
                'excerpt' => 'Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.',
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'image' => 'default.jpg',
                'contact_number' => '1234567890',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'twitter' => 'https://twitter.com/',
                'linkedIn' => 'https://www.linkedin.com/',
                'yelp' => 'https://www.yelp.com/',
                'yellow_pages' => 'https://www.yellowpages.com/',
                'google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101257.27957063806!2d-77.49326144999999!3d37.524660950000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b111095799c9ed%3A0xbfd83e6de2423cc5!2sRichmond%2C%20VA%2C%20USA!5e0!3m2!1sen!2s!4v1724777617847!5m2!1sen!2s',
                'meta_title' => 'Richmond',
                'meta_tag' => 'Richmond',
                'meta_description' => 'Richmond',
            ],

            [
                'id' => 3,
                'title' => 'Richmond lol',
                'state_id' => 1,
                'slug' => Str::slug('Richmond11'),
                'excerpt' => 'Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.',
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'image' => 'default.jpg',
                'contact_number' => '1234567890',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'twitter' => 'https://twitter.com/',
                'linkedIn' => 'https://www.linkedin.com/',
                'yelp' => 'https://www.yelp.com/',
                'yellow_pages' => 'https://www.yellowpages.com/',
                'google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101257.27957063806!2d-77.49326144999999!3d37.524660950000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b111095799c9ed%3A0xbfd83e6de2423cc5!2sRichmond%2C%20VA%2C%20USA!5e0!3m2!1sen!2s!4v1724777617847!5m2!1sen!2s',
                'meta_title' => 'Richmond',
                'meta_tag' => 'Richmond',
                'meta_description' => 'Richmond',
            ],

            [
                'id' => 4,
                'title' => 'Richmond chus',
                'state_id' => 1,
                'slug' => Str::slug('Richmond1111'),
                'excerpt' => 'Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.',
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'image' => 'default.jpg',
                'contact_number' => '1234567890',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'twitter' => 'https://twitter.com/',
                'linkedIn' => 'https://www.linkedin.com/',
                'yelp' => 'https://www.yelp.com/',
                'yellow_pages' => 'https://www.yellowpages.com/',
                'google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101257.27957063806!2d-77.49326144999999!3d37.524660950000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b111095799c9ed%3A0xbfd83e6de2423cc5!2sRichmond%2C%20VA%2C%20USA!5e0!3m2!1sen!2s!4v1724777617847!5m2!1sen!2s',
                'meta_title' => 'Richmond',
                'meta_tag' => 'Richmond',
                'meta_description' => 'Richmond',
            ],


        ];
        City::upsert($cities, ['id'], ['title', 'state_id', 'slug', 'excerpt', 'description', 'status', 'image', 'facebook', 'instagram', 'twitter', 'linkedIn', 'yelp', 'yellow_pages', 'google_map', 'meta_title', 'meta_tag', 'meta_description']);
    }
}
