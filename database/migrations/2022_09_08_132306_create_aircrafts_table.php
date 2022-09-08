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
        Schema::create('aircrafts', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('description');
            $table->integer('distance');
            $table->integer('pilots');
            $table->integer('range');
            $table->integer('range');
            $table->boolean('carrier_capable');
            $table->text('origin_country');
            $table->longText('image');
            $table->enum('operation', ['Day', 'Night']);
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
        Schema::dropIfExists('aircrafts');
    }
};
