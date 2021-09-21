<?php

namespace Database\Factories;

use App\Models\Livro;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LivroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->unique()->sentence(1),
            'autor' => $this->faker->name(),
            'descricao' => $this->faker->unique()->sentence,
            'numero_de_paginas' => rand(1, 999)
        ];
    }
}
