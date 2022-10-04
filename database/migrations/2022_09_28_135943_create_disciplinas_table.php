<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->id();

            $table->string('cargaHoraria');
            $table->text('descricao')->nullable();

            $table->integer('numAlunos');

            $table
                    ->foreignId('departamentos_id')
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
        Schema::dropIfExists('disciplinas');
    }
}
