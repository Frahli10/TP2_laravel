<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\MaisonneuveEtudiant;

use Illuminate\Database\Eloquent\Factories\Factory;

class MaisonneuveEtudiantFactory extends Factory
{
    protected $model = MaisonneuveEtudiant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            //'adresse' => Str::random(10),
            'adresse' => $this->faker->address(),
            'phone' => $this->faker->numerify('##########'),
            'email' => $this->faker->unique()->safeEmail(),
            'date_de_naissance' =>$this->faker->date(),
            'ville_id' => $this->faker->numberBetween(1,10)
        ];
    }
}

//php artisan make:factory MaisonneuveEtudiantFactory --model=MaisonneuveEtudiant
//php artisan make:factory VilleFactory --model=Ville
//php artisan make:seed EtudiantTableSeeder
//php artisan make:seed VilleTableSeeder
//php artisan db:seed --class=EtudiantTableSeeder
//php artisan db:seed --class=VilleTableSeeder