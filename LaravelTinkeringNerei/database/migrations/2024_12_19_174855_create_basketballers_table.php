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
        Schema::create('basketballers', function (Blueprint $table) {
            $table->id();
            $table->string('nom basketballer');
            $table->string('equip basketballer')->nullable();
            $table->integer('edat basketballer');
            $table->string('posicio basketballer');
            $table->integer('dorsal basketballer');

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
        Schema::dropIfExists('nueva_tabla');
    }
};
