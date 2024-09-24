<?php

namespace Database\Seeders;

use App\Models\Projects;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [

            [
                'id' => 1,
                'title' => 'cleaning Project',
                'slug' => Str::slug('cleaning Project'),
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'is_active' => 1,
                'client_name' => 'John Doe',
                'category' => 'cleaning',
                'start_date' => '25-08-2024',
                'image' => 'default.jpg',
                'meta_title' => 'cleaning Project',
                'meta_tag' => 'cleaning Project',
                'meta_description' => 'cleaning Project',
            ],
            [
                'id' => 2,
                'title' => 'cleaning Project 1',
                'slug' => Str::slug('cleaning Project 1'),
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'is_active' => 1,
                'client_name' => 'John Doe',
                'category' => 'cleaning',
                'start_date' => '25-08-2024',
                'image' => 'default.jpg',
                'meta_title' => 'cleaning Project 1',
                'meta_tag' => 'cleaning Project 1',
                'meta_description' => 'cleaning Project 1',
            ],
            [
                'id' => 3,
                'title' => 'cleaning Project 2',
                'slug' => Str::slug('cleaning Project 2'),
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'is_active' => 1,
                'client_name' => 'John Doe',
                'category' => 'cleaning',
                'start_date' => '25-08-2024',
                'image' => 'default.jpg',
                'meta_title' => 'cleaning Project 2',
                'meta_tag' => 'cleaning Project 2',
                'meta_description' => 'cleaning Project 2',
            ],
            [
                'id' => 4,
                'title' => 'cleaning Project 3',
                'slug' => Str::slug('cleaning Project 3'),
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'is_active' => 1,
                'client_name' => 'John Doe',
                'category' => 'cleaning',
                'start_date' => '25-08-2024',
                'image' => 'default.jpg',
                'meta_title' => 'cleaning Project 3',
                'meta_tag' => 'cleaning Project 3',
                'meta_description' => 'cleaning Project 3',
            ],
            [
                'id' => 5,
                'title' => 'cleaning Project 4',
                'slug' => Str::slug('cleaning Project 4'),
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'is_active' => 1,
                'client_name' => 'John Doe',
                'category' => 'cleaning',
                'start_date' => '25-08-2024',
                'image' => 'default.jpg',
                'meta_title' => 'cleaning Project 4',
                'meta_tag' => 'cleaning Project 4',
                'meta_description' => 'cleaning Project 4',
            ],
            [
                'id' => 6,
                'title' => 'cleaning Project 5',
                'slug' => Str::slug('cleaning Project 5'),
                'description' => 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
                'status' => 1,
                'is_active' => 1,
                'client_name' => 'John Doe',
                'category' => 'cleaning',
                'start_date' => '25-08-2024',
                'image' => 'default.jpg',
                'meta_title' => 'cleaning Project 5',
                'meta_tag' => 'cleaning Project 5',
                'meta_description' => 'cleaning Project 5',
            ],

        ];

        Projects::upsert($projects, ['id'], ['title', 'slug', 'description', 'status', 'is_active', 'client_name', 'category', 'start_date', 'image', 'meta_title', 'meta_tag', 'meta_description']);
    }
}
