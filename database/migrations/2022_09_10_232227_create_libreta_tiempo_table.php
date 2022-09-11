<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libreta_tiempo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('semana');
            $table->enum('dia', [
                'jueves', 'viernes', 'sabado', 'domingo',
                'lunes', 'martes', 'miercoles'
            ]);
            $table->decimal('horas', 4, 2);
            $table->unsignedInteger('obra_trabajador_id');
            $table->timestamps();

            $table->foreign('obra_trabajador_id')->references('id')
                ->on('obra_trabajador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libreta_tiempo');
    }
};
