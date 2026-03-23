<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Faker\Generator as Faker;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = [ 'Web Development', 'Mobile Development', 'Data Science', 'Machine Learning', 'DevOps' ];

		foreach ($types as $type) {
			$newtype = new Type();
			$newtype->name = $type;
			$newtype->description = $faker->paragraph();
			$newtype->save();
		}
    }
}
