<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversidadsTable extends Migration {
    public function up() {
        Schema::create('universidad', function (Blueprint $table) {
            $table->id();
            $table->integer('ambi_codigo');
            $table->integer('tamb_codigo');
            $table->string('ambi_campus');
            $table->string('ambi_edificio');
            $table->string('ambi_nombre');
            $table->string('ambi_descripcion');
            $table->integer('ambi_capacidad');
            $table->string('ambi_vigente');
            $table->integer('ambi_latitud');
            $table->integer('ambi_longitud');
            $table->integer('camp_codigo');
            $table->integer('edif_codigo');
            $table->integer('sala_codigo');
            $table->string('usuario_mod');
            $table->datetime('fecha_mod');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('universidad');
    }
}
