<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Review;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Service::insert([
            [
                "name" => 'Cutting',
                "duration" => 60,
            ],
            [
                "name" => 'Coloring',
                "duration" => 60,
            ],
            [
                "name" => 'Blow',
                "duration" => 30,
            ],
            [
                "name" => 'Smoothing',
                "duration" => 90,
            ],
        ]);

        Review::insert([
            [
                "name" => "Angel",
                "rating" => 5,
                "comment" => "a",
            ],
            [
                "name" => "Natasha",
                "rating" => 5,
                "comment" => "a",
            ],
            [
                "name" => "Michelle",
                "rating" => 5,
                "comment" => "a",
            ],
            [
                "name" => "Jessica",
                "rating" => 5,
                "comment" => "a",
            ],
        ]);
    }
}
