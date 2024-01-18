<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(0, 30) as $index){
            DB::table('teachers')->insert([
                'name'=>$faker->name,
                'address'=>$faker->address,
                'mobile'=>rand(111, 999999999999999)
            ]);
        }
        
    }
}
