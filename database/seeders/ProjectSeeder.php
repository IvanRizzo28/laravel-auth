<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Project::truncate();

        $language=['php','javascript','c++','java','python'];
        for($i=0;$i<10;$i++){
            $tmp=new Project();
            $tmp->title=$faker->sentence(3);
            $tmp->description=$faker->paragraph();
            $tmp->language=$faker->randomElement($language).", ".$faker->randomElement($language);
            $tmp->save();
        }
    }
}
