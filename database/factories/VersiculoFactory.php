<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Versiculo>
 */
class VersiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition($atributes = []): array
    {
        return [
            "capitulo" => $attributes['capitulo'] ?? $this->faker->randomDigit,
		    "versiculo"=> $attributes['versiculo'] ?? $this->faker->randomDigit,
		    "texto"=> $attributes['texto'] ?? $this->faker->text,
		    "livro_id"=> $attributes['livro_id'] ?? $this->faker->randomDigit,
        ];
    }
}
