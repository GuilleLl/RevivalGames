<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReseñasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseñas', function (Blueprint $table) {
            $table->id();
            $table->text('Descripcion_Reseña');
            $table->integer('Valoracion');
            $table->timestamps();
            $table->foreignId('id_juegos')
                  ->constrained('juegos')
                  ->cascadeOnUpdate();
                  
            $table->foreignId('id_usuario')
                  ->constrained('users')
                  ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseñas');
    }
}
