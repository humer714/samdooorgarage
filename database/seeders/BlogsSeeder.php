<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = [

            [
                'id' => 1,
                'title' => 'Cleaning services system',
                'slug' => Str::slug('Cleaning services system'),
                'category' => 'Cleaning services system',
                'excerpt' => 'Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum, veniam. Esse est assumenda inventore.',
                'description' => 'Consultexperts are slowly gaining immense recognition and are growing phenomenally with more and more people trading with this digital currency. The universal acceptance of Consultation has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.Consultations are slowly gaining immense recognition and are growing phenomenally with more and more people trading with this digital currency. The universal acceptance of Consultation has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.',
                'status' => 1,
                'is_active' => 1,
                'image' => 'default.jpg',
                'meta_title' => 'Cleaning services system',
                'meta_tag' => 'Cleaning services system',
                'meta_description' => 'Cleaning services system',
            ],
            [
                'id' => 2,
                'title' => 'Carpet cleaning instrument',
                'slug' => Str::slug('Carpet cleaning instrument'),
                'category' => 'House cleaning',
                'excerpt' => 'Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum, veniam. Esse est assumenda inventore.',
                'description' => 'Consultexperts are slowly gaining immense recognition and are growing phenomenally with more and more people trading with this digital currency. The universal acceptance of Consultation has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.Consultations are slowly gaining immense recognition and are growing phenomenally with more and more people trading with this digital currency. The universal acceptance of Consultation has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.',
                'status' => 1,
                'is_active' => 1,
                'image' => 'default.jpg',
                'meta_title' => 'Carpet cleaning instrument',
                'meta_tag' => 'Carpet cleaning instrument',
                'meta_description' => 'Carpet cleaning instrument',
            ],
            [
                'id' => 3,
                'title' => 'Residential cleaning service',
                'slug' => Str::slug('Residential cleaning service'),
                'category' => 'House cleaning',
                'excerpt' => 'Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum, veniam. Esse est assumenda inventore.',
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'is_active' => 1,
                'image' => 'default.jpg',
                'meta_title' => 'Residential cleaning service',
                'meta_tag' => 'Residential cleaning service',
                'meta_description' => 'Residential cleaning service',
            ],

        ];

        Blog::upsert($blogs, ['id'], ['title', 'slug', 'category', 'excerpt', 'description', 'status', 'is_active', 'image', 'meta_title', 'meta_tag', 'meta_description']);
    }
}
