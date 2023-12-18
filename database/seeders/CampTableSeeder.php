<?php

namespace Database\Seeders;

use App\Models\Camp;
use Carbon\Carbon;
use Illuminate\Database\Seeder;


class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $camps = [
            [
                'title' => 'Web Development',
                'slug' => 'web-development',
                'price' => 350,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Fullstack Java',
                'slug' => 'fullstack-java',
                'price' => 640,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Laravel Advanced',
                'slug' => 'laravel-advanced',
                'price' => 700,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Django Web Development',
                'slug' => 'django-web-development',
                'price' => 450,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Internet Of Things',
                'slug' => 'internet-of-things',
                'price' => 600,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }
    }
}
