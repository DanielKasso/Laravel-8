<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoDisciplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_disciplinas', function (Blueprint $table) {
            $table->id();

            $table
                    ->foreignId('alunos_id')
                    ->index()
                    ->constrained()
                    ->cascadeOnDelete();
            $table
                    ->foreignId('disciplinas_id')
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
        Schema::dropIfExists('aluno_disciplinas');
    }
}
