<?php

namespace Database\Seeders;
//use App\Models\Ville;
use App\Models\Etudiant;



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
        //Ville::factory()->count(15)->create();
        Etudiant::factory()->count(100)->create();
    }
}
