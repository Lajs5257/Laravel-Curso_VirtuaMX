<?php

use Illuminate\Database\Seeder;
use App\Movie;

class moviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$movie  = new Movie;
        $movie -> name = "The Batman";
        $movie -> category = "Superheros";
        $movie -> realize_date = "20220303";
        $movie -> director = 'Matt Reeaves';
        $movie -> save();*/

        $faker = Faker\Factory::create();

        for($i=0;$i<1000;$i++) {
            $movie  = new Movie;
        $movie -> name = $faker->name;
        $movie -> category = $faker->word;
        $movie -> realize_date = $faker->date($format = 'Y-m-d',$max = 'now');
        $movie -> director = $faker->firstName;
        $movie -> save();
        }
    }
}
