<?php

namespace Database\Seeders;

use App\Models\Salle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Salle::factory(5)->create();

    }
}
