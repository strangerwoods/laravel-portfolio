<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
		for ($i = 0; $i < 10; $i++) {
			$project = new Project();
			$project->name = $faker->bs();
			$project->client = $faker->company();
			$project->period = $faker->dateTimeBetween('-2 years', 'now');
			$project->description = $faker->text();
			$project->save();
		}
    }
}
