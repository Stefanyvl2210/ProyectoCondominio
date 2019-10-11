<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmuebleCobrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmueble_cobros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('inmueble_id');
            $table->text('mes');
            $table->text('descripcion');
            $table->decimal('monto');
            $table->decimal('mora');
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
        Schema::dropIfExists('inmueble_cobros');
    }
}
