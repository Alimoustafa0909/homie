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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price');
            $table->text('description');
            $table->string('location');
            $table->string('type');
            $table->string('status');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('garage');
            $table->integer('area');
            $table->string('image')->nullable();
            $table->enum('features', ['air_conditioning', 'parking', 'lift', 'bedding', 'balcony','pool','cable_tv','dish_washer','internet','toaster'])->nullable();
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
        Schema::dropIfExists('properties');
    }
};
