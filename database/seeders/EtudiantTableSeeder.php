<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MaisonneuveEtudiant;


class EtudiantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MaisonneuveEtudiant::factory()->count(100)->create();
    }
}
