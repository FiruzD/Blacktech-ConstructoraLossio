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
        Schema::create('entrega_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->decimal('precio', 9, 2);
            $table->integer('semana');
            $table->date('fecha_entrega');
            $table->unsignedInteger('obra_trabajador_id');
            $table->unsignedInteger('producto_id');
            $table->timestamps();

            $table->foreign('obra_trabajador_id')->references('id')
                ->on('obra_trabajador');

            $table->foreign('producto_id')->references('id')
                ->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrega_productos');
    }
};
