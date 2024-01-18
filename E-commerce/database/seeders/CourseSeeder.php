<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(0, 5) as $index){

        
        DB::table('courses')->insert([
            'name' => $faker->firstName . ' '. $faker->lastName,
            'syllabus'=>$faker->sentence(3),
            'duration'=>rand(0, 10)

        ]);
        }
    }
}
