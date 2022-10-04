<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->string('sobreNome');
            $table->string('bi', 14)->unique();
            $table->string('telefone', 9)->unique();
            $table->string('email')->unique()->nullable();
            $table->string('sexo', 9);

            $table->boolean('estado');
           

            $table
                    ->foreignId('cursos_id')
                    ->index()
                    ->constrained()
                    ->cascadeOnDelete();
            $table
                    ->foreignId('ruas_id')
                    ->index()
                    ->constrained()
                    ->cascadeOnDelete();
            $table
                    ->foreignId('bairros_id')        
                    ->index()
                    ->constrained()
                    ->cascadeOnDelete();
            $table
                    ->foreignId('municipios_id')
                    ->index()
                    ->constrained()
                    ->cascadeOnDelete();
            $table
                    ->foreignId('provincias_id')
                    ->index()
                    ->constrained()
                    ->cascadeOnDelete();
            $table
                    ->foreignId('turmas_id')
                    ->index()
                    ->constrained()
                    ->cascadeOnDelete();
            $table
                    ->foreignId('filiacaos_id')
                    ->index()
                    ->constrained()
                    ->cascadeOnDelete();

            $table->dateTimeTZ('criadoAo', 0)->nullable();
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
        Schema::dropIfExists('alunos');
    }
}
