<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        foreach(range(0, 50) as $index){
            DB::table('students')->insert([
                'name' => $faker->firstName . " " .$faker->lastName,
                'address'=>$faker->address,
                'mobile'=>rand(0, 99999999999)
            ]);
        }
    }
}
