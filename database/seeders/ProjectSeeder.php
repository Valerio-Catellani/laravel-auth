<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title = $faker->word();
            $project->slug = Project::generateSlug($project->name);
            $project->description = $faker->sentence();
            $project->created = $faker->dateTime();
            $project->categories = $faker->words(rand(2, 5), true);
            $project->technologies = $faker->sentence(rand(2, 5), true);
            $project->image_url = $faker->sentence();
            $project->save();
        }
    }
}
