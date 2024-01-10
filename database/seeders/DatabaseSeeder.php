<?php

namespace Database\Seeders;

use App\Models\Salles;
use App\Models\Salle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        Salles::factory(5)->create([
            'nom'=> 'salle',
            'numero' => 1
        ]);
        Salles::factory()->create([
            'nom'=> 'salle',
            'numero' => 2
        ]);
        Salles::factory()->create([
            'nom'=> 'salle',
            'numero' => 3
        ]);
        Salles::factory()->create([
            'nom'=> 'salle',
            'numero' => 4
        ]);
        Salles::factory()->create([
            'nom'=> 'salle',
            'numero' => 5
        ]);
        Salle::factory(5)->create();

    }
}
