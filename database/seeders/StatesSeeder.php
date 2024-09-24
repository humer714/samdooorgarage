<?php

namespace Database\Seeders;

use App\Models\States;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            [
                'id' => 1,
                'title' => 'California',
            ],
            [
                'id' => 2,
                'title' => 'Florida',
            ],
            [
                'id' => 3,
                'title' => 'New York',
            ],
        ];
        States::upsert($states, ['id'], ['title']);
    }
}
