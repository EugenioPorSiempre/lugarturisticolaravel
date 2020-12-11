<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleLugaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_lugares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('calificacion_id')->nullable()->constrained('calificaciones');
            $table->foreignId('comentario_id')->nullable()->constrained('comentarios');
            $table->foreignId('lugar_id')->nullable()->constrained('lugares');
            $table->foreignId('user_id')->nullable()->constrained('users');
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
        Schema::dropIfExists('detalle_lugares');
    }
}
