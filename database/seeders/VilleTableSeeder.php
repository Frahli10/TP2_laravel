<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ville;


class VilleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ville::factory()->count(10)->create();

    }
}
