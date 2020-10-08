<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatefavoriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('favorite', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('customer');
            $table->String('product');
            $table->Double('price');
            $table->integer('quantite');
            $table->integer('size');
            $table->String('image');

        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
