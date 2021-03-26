<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenda2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda2s', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('id_paciente');
            $table->bigInteger('id_doctor');
            $table->date('fecha_agenda');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->string('observacion',100);
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
        Schema::dropIfExists('agenda2s');
    }
}
