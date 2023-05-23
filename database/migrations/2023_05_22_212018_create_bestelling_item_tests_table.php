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
        Schema::create('bestelling_item_tests', function (Blueprint $table) {
            $table->id();
            $table->integer('bestelling_id');
            $table->string('product');
            $table->string('keuze');
            $table->integer('aantal');
            $table->float('totaal');
            $table->integer('autoOrderItem');
            $table->binary('textInfo');
            $table->timestamp('deleted_at');
            $table->string('course');
            $table->integer('pid');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bestelling_item_tests');
    }
};
