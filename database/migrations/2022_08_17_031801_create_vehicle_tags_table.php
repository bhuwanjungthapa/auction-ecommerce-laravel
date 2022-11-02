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
        Schema::create('vehicle_tags', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('tag_id')->unsigned(); 
            $table->BigInteger('vehicle_id')->unsigned();         
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
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
        Schema::dropIfExists('vehicle_tags');
    }
};
