<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
     public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 150);
            $table->float('tamanho');
            $table->integer('numeroAssinaturas');
            $table->string('assinaturaResponsavel', 150);
            $table->integer('qtdPaginas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
    }
}
