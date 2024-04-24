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
        Schema::create('participaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('evento_id');
            $table->integer('organizador_id');
            $table->string('rol');
            $table->timestamps();
           
            
            $table->foreign('evento_id')
            ->references('id')
            ->on('eventos');

            $table->foreign('organizador_id')
            ->references('id')
            ->on('organizadores');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participaciones');
    }
};
