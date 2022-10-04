<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();

            $table->string('periodo');
            $table->integer('numAlunos');
            $table->date('dataInicio');
            $table->date('dataFim');

            $table
                   ->foreignId('cursos_id')
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
        Schema::dropIfExists('turmas');
    }
}
