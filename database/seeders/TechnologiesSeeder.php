<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Faker\Generator as Faker;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = ['PHP', 'Laravel', 'JavaScript', 'Vue.js', 'React', 'Node.js', 'Python', 'Django', 'Flask', 'Ruby on Rails'];


		foreach ($technologies as $technology) {
			$newTechnology = new Technology();
			$newTechnology->name = $technology;
			$newTechnology->color = $faker->hexColor();
			$newTechnology->save();
		}
	}
}

