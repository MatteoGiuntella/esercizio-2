<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//model
use App\Models\Film;
use Faker\Generator as Faker;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10 ; $i++) { 
            $film = new Film();
            // Ne riempio le colonne
            $film->title = fake()->sentence();
            $film->release_year = fake()->year();
            $film->director = fake()->name();
            $film->genre = fake()->words(1,true);
            $film->main_actor = fake()->sentence(4);
            $film->duration_minutes = fake()->numberBetween(60,180);
            $film->plot = fake()->paragraph;
            $film->language = fake()->languageCode();            
            // lo salvo
            $film->save();
        }
    }
}
