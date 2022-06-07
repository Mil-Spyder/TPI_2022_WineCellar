<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBottleGrapeVarietyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bottle_grape_variety', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grape_variety_id');
            $table->foreign('grape_variety_id')->references('id')->on('grape_varieties')->onDelete('cascade');
            $table->unsignedBigInteger('bottle_id');
            $table->foreign('bottle_id')->references('id')->on('bottles')->onDelete('cascade');
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
        Schema::dropIfExists('bottle_grape_variety');
    }
}
