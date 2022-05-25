<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinemakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winemakers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',55);
            $table->string('last_name',55);
            $table->string('phone_number',55);
            $table->string('adress',250);
            $table->string('city',250);
            $table->string('locality',250);
            $table->string('country',250);
            $table->string('domain_name',250);
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
        Schema::dropIfExists('winemakers');
    }
}
