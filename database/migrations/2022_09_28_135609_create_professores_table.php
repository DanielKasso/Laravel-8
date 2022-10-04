<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

class CreateProfessoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->string('sobreNome');
            $table->boolean('estado');
            $table->string('email')->nullable();
            
            $table
                   ->foreignId('users_id')
                   ->index()
                   ->constrained()
                   ->cascadeOnDelete();

            $table
                   ->foreignId('departamentos_id')
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
        Schema::dropIfExists('professores');
    }
}
