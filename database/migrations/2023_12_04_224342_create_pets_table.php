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
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nome')->nullable();
            $table->text('telefone')->nullable();
            $table->text('foto')->nullable();
            $table->text('descricao')->nullable();
            $table->integer('informante_id')->nullable();
            $table->integer('dono_id')->nullable();
            $table->timestamps();
            $table->integer('raca')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
};
