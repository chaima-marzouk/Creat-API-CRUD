<?php

namespace Database\Factories;

use App\Models\book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->text(50),
            'description' => $this-> faker->text(150),
            'date_publication' => $this->faker->text(50),
            'nombre_page' => $this->faker->text(50),
            'auteur' => $this->faker->text(50),
        ];
    }
}
