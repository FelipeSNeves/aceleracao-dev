<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "titulo" => $this->faker->name(),
            "tamanho" => $this->faker->numberBetween(1,100),
            "numeroAssinaturas" => $this->faker->numberBetween(1,100), 
            "assinaturaResponsavel" => $this->faker->name(),
            "qtdPaginas" =>  $this->faker->numberBetween(1,100)
        ];
    }
}
