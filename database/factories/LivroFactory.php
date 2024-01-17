<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livro>
 */
class LivroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition($atributes = []): array
    {
        return [
             'nome' => $attributes['nome'] ?? $this->faker->name,
             'posicao' => $attributes['posicao'] ?? $this->faker->randomDigit,
             'abreviacao'=> $attributes['abreviacao'] ?? $this->faker->name,
             'testamento_id' => $attributes['testamento_id'] ?? $this->faker->randomDigit,
        ];
    }
}
