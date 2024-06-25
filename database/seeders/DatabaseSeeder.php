<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Branch;
use App\Models\BranchService;
use App\Models\Review;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
            [
                "name" => "admin",
                "email" => "admin@mail.com",
                "phone" => "081312345678",
                "password" => bcrypt("admin"),
                "role" => "admin",
            ],
            [
                "name" => "customer",
                "email" => "customer@mail.com",
                "phone" => "081312345678",
                "password" => bcrypt("customer"),
                "role" => "customer",
            ],
        
        
        ]);

        Branch::insert([
            [
                'name' => "Branch A",
                'opening' => Carbon::createFromTime(12, 30, 0)->format('H:i:s'),
                'closing' => Carbon::createFromTime(18, 30, 0)->format('H:i:s'),
            ],
            [
                'name' => "Branch B",
                'opening' => Carbon::createFromTime(12, 30, 0)->format('H:i:s'),
                'closing' => Carbon::createFromTime(18, 30, 0)->format('H:i:s'),
            ],
            [
                'name' => "Branch C",
                'opening' => Carbon::createFromTime(12, 30, 0)->format('H:i:s'),
                'closing' => Carbon::createFromTime(18, 30, 0)->format('H:i:s'),
            ],
        ]);

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

        BranchService::insert([
            [
                'branch_id' => 1,
                'service_id' => 4,
            ],
        ]);

        Review::insert([
            [
                "name" => "Angel",
                "rating" => 5,
                "comment" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, sint?",
            ],
            [
                "name" => "Natasha",
                "rating" => 3,
                "comment" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, sint?",
            ],
            [
                "name" => "Michelle",
                "rating" => 4,
                "comment" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, sint?",
            ],
            [
                "name" => "Jessica",
                "rating" => 5,
                "comment" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, sint?",
            ],
        ]);
    }
}
