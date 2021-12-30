<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // Exercicio 110
        // \App\Models\Documento::create([
        //     "titulo" => "Primeiro Seeder Documento",
        //     "tamanho" => "100",
        //     "numeroAssinaturas" => "1",
        //     "assinaturaResponsavel" => "Felipe Neves",
        //     "qtdPaginas" => "1"
        // ]);

        // \App\Models\Documento::create([
        //     "titulo" => "Segundo Seeder Documento",
        //     "tamanho" => "200",
        //     "numeroAssinaturas" => "2",
        //     "assinaturaResponsavel" => "Luciano Neves",
        //     "qtdPaginas" => "2"
        // ]);

        // \App\Models\Documento::create([
        //     "titulo" => "Terceiro Seeder Documento",
        //     "tamanho" => "300",
        //     "numeroAssinaturas" => "3",
        //     "assinaturaResponsavel" => "Andreia Neves",
        //     "qtdPaginas" => "3"
        // ]);

        \App\Models\Documento::factory(600)->create();
    }
}
