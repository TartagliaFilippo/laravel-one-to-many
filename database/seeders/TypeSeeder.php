<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $labels = ["Front-End", "Back-End", "Full-Stack"];

        foreach ($labels as $label) {
            $type = new Type();

            $type->label = $label;
            $type->color = $faker->hexColor();
            $type->save();
        }
    }
}