<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\traje>
 */
class trajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name(),
            'descripcion'=>$this->faker->text(50),
            'stock'=>$this->faker->randomElement(['Disponible','Agotado']),
            'precio'=>$this->faker->numerify('########'),
            'talla'=>$this->faker->randomElement(['XS','S','M','L','XL','XXL']),
            'imagen'=>$this->faker->name(),
            'categoria_id'=>Categoria::all()->random()->id

        ];
    }
}
