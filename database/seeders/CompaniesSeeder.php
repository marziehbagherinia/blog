<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('companies')->delete();
//
        $faker = Faker::create();
        $companies = [];

        foreach (range(1, 10) as $index) {
            $companies[] = [
                'name' => $faker->company,
                'email' => $faker->email,
                'address' => $faker->address
            ];
        }

        DB::table('companies')->insert($companies);

    }
}
