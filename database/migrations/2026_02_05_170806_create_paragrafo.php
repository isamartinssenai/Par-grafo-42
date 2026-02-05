<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livro', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->text('autor');
            $table->integer('ano_publicacao');
            $table->text('editora');
            $table->text('isbn');
            $table->integer('paginas');
            $table->decimal('preco', 8, 2);
            $table->text('genero');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livro');
    }
};
