<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBottlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bottles', function (Blueprint $table) {
            $table->id();
            $table->string('appelation', 250);
            $table->string('cuvee_name', 55);
            $table->string('region');
            $table->integer('vintage',false);
            $table->integer('capacity',false);
            $table->string('color', 50);
            $table->integer('unit',false);
            $table->integer('consumable_date',false);
            $table->integer('peak_date',false);
            $table->integer('danger_date',false);
            $table->longText('description');
            $table->unsignedBigInteger('culture_id')->nullable();
            $table->foreign('culture_id')->references('id')->on('cultures')->onDelete('cascade');
            $table->unsignedBigInteger('winemaker_id')->nullable();
            $table->foreign('winemaker_id')->references('id')->on('winemakers')->onDelete('cascade');            
            $table->unsignedBigInteger('grape_variety_id')->nullable();
            $table->foreign('grape_variety_id')->references('id')->on('grape_varieties')->onDelete('cascade');
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
        Schema::dropIfExists('bottles');
    }
}
