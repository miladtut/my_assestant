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
        Schema::create('flash_sale_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('flash_sale_id');
            $table->unsignedBigInteger('item_id');
            $table->integer('stock');
            $table->integer('sold')->default(0);
            $table->integer('available_stock');
            $table->string('discount_type');
            $table->double('discount', 23, 3)->default(0);
            $table->double('discount_amount', 23, 3)->default(0);
            $table->double('price', 23, 3)->default(0);
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('flash_sale_items');
    }
};
