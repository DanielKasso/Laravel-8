<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinaHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplina_historicos', function (Blueprint $table) {
            $table->id();

            $table->integer('frequencia')->nullable();
            
            $table
                    ->foreignId('disciplinas_id')
                    ->index()
                    ->constrained()
                    ->cascadeOnDelete();
            $table
                    ->foreignId('historicos_id')
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
        Schema::dropIfExists('disciplina_historicos');
    }
}
