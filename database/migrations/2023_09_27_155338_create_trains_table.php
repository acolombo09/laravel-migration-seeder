<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            // default creato da php artisan
            $table->id();

            // default nullable() è sempre true
            $table->string("company", 90)->nullable(false);//VARCHAR

            $table->string("departure_station", 60)->nullable(false); //VARCHAR

            $table->string("arrival_station", 60)->nullable(false); //VARCHAR

            $table->time("departure_time", 2)->nullable(false); 

            $table->time("arrival_time", 2)->nullable(false);  //h:i:s

            $table->string("train_code", 9)->nullable(false); //regexify, grazie Google

            $table->unsignedTinyInteger("cart_number")->nullable(false); //random

            $table->boolean("in_time")->default(true); //TINYINT

            $table->boolean("canceled")->default(false); //TINYINT

            // default creato da php artisan
            $table->timestamps();
        });
    }

    // le down le lascio vuote in quanto non è prevista alcuna modifica delle up()
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
