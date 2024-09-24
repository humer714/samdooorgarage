<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [

            [
                'id' => 1,
                'title' => 'House cleaning',
                'slug' => Str::slug('House cleaning'),
                'excerpt' => 'Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.',
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'is_active' => 1,
                'image' => 'default.jpg',
                'meta_title' => 'House cleaning',
                'meta_tag' => 'House cleaning',
                'meta_description' => 'House cleaning',
            ],
            [
                'id' => 2,
                'title' => 'Apartment cleaning',
                'slug' => Str::slug('Apartment cleaning'),
                'excerpt' => 'Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.',
                'description' => 'Apartment cleaning Description',
                'status' => 1,
                'is_active' => 1,
                'image' => 'default.jpg',
                'meta_title' => 'Apartment cleaning',
                'meta_tag' => 'Apartment cleaning',
                'meta_description' => 'Apartment cleaning',
            ],
            [
                'id' => 3,
                'title' => 'Carpet cleaning',
                'slug' => Str::slug('Carpet cleaning'),
                'excerpt' => 'Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.',
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'is_active' => 1,
                'image' => 'default.jpg',
                'meta_title' => 'Carpet cleaning',
                'meta_tag' => 'Carpet cleaning',
                'meta_description' => 'Carpet cleaning',
            ],
            [
                'id' => 4,
                'title' => 'Commercial cleaning',
                'slug' => Str::slug('Commercial cleaning'),
                'excerpt' => 'Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.',
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'is_active' => 1,
                'image' => 'default.jpg',
                'meta_title' => 'Commercial cleaning',
                'meta_tag' => 'Commercial cleaning',
                'meta_description' => 'Commercial cleaning',
            ],
            [
                'id' => 5,
                'title' => 'Residential cleaning',
                'slug' => Str::slug('Residential cleaning'),
                'excerpt' => 'Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.',
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'is_active' => 1,
                'image' => 'default.jpg',
                'meta_title' => 'Residential cleaning',
                'meta_tag' => 'Residential cleaning',
                'meta_description' => 'Residential cleaning',
            ],
            [
                'id' => 6,
                'title' => 'After renovation',
                'slug' => Str::slug('After renovation'),
                'excerpt' => 'Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.',
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'is_active' => 1,
                'image' => 'default.jpg',
                'meta_title' => 'After renovation',
                'meta_tag' => 'After renovation',
                'meta_description' => 'After renovation',
            ],

        ];

        Service::upsert($services, ['id'], ['title', 'slug', 'excerpt', 'description', 'status', 'is_active', 'image', 'meta_title', 'meta_tag', 'meta_description']);
    }
}
