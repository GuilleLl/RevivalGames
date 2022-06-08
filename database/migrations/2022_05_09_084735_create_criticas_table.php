<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatecriticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criticas', function (Blueprint $table) {
            $table->id();
            $table->text('Descripcion_critica');
            $table->integer('Valoracion');
            $table->timestamps();
            $table->foreignId('id_juegos')
                  ->constrained('juegos')
                  ->onDelete('cascade');
                  
            $table->foreignId('id_usuario')
                  ->constrained('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criticas');
    }
}
