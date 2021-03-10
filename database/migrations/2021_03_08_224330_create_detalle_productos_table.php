<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_producto');
            $table->string('descripcion');
            $table->string('no_factura')->nullable();
            $table->double('valorUnitario');
            $table->bigInteger('cantidadEntradas')->nullable();
            $table->bigInteger('cantidadSalidas')->nullable();
            $table->double('valorEntradas')->nullable();
            $table->double('valorSalidas')->nullable();
            $table->bigInteger('cantidadSaldo');
            $table->double('valorSaldo');
            $table->softDeletes();
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
        Schema::dropIfExists('detalle_productos');
    }
}
