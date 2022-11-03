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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('vehicle_type_id')->unsigned();
            $table->BigInteger('brand_id')->unsigned();
            $table->string('title', 100);
            $table->string('slug')->unique();
            $table->string('specification')->nullable();
            $table->integer('stock');
            $table->integer('quantity');
            $table->integer('price');
            $table->string('meta_title',100)->nullable();
            $table->string('meta_keyword',100)->nullable();
            $table->string('meta_description',100)->nullable();
            $table->string('description',100)->nullable();
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->foreign('vehicle_type_id')->references('id')->on('vehicles_type');
            $table->foreign('brand_id')->references('id')->on('brands');
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
        Schema::dropIfExists('vehicles');
    }
};
