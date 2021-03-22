<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('length');
            $table->decimal('price', 9, 2)->nullable();
            $table->boolean('buyable')->nullable();
            $table->unsignedBigInteger('disc_id');
            $table->timestamps();

            $table->foreign('disc_id')
                ->references('id')
                ->on('discs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracks');
    }
}
