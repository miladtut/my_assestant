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
        Schema::create('parcel_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image', 191)->nullable();
            $table->string('name', 191)->unique();
            $table->text('description');
            $table->boolean('status')->default(true);
            $table->integer('orders_count')->default(0);
            $table->unsignedBigInteger('module_id')->index('parcel_categories_module_id_foreign');
            $table->timestamps();
            $table->double('parcel_per_km_shipping_charge', 23, 2)->nullable();
            $table->double('parcel_minimum_shipping_charge', 23, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcel_categories');
    }
};
