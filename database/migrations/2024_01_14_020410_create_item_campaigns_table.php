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
        Schema::create('item_campaigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 191)->nullable();
            $table->string('image', 100)->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('admin_id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('category_ids')->nullable();
            $table->text('variations')->nullable();
            $table->string('add_ons')->nullable();
            $table->string('attributes')->nullable();
            $table->text('choice_options')->nullable();
            $table->decimal('price', 24)->default(0);
            $table->decimal('tax', 24)->default(0);
            $table->string('tax_type', 20)->default('percent');
            $table->decimal('discount', 24)->default(0);
            $table->string('discount_type', 20)->default('percent');
            $table->unsignedBigInteger('store_id');
            $table->timestamps();
            $table->boolean('veg')->default(false);
            $table->unsignedBigInteger('module_id')->index('item_campaigns_module_id_foreign');
            $table->integer('stock')->nullable()->default(0);
            $table->unsignedBigInteger('unit_id')->nullable();
            $table->text('food_variations')->nullable();
            $table->string('slug')->nullable();
            $table->integer('maximum_cart_quantity')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_campaigns');
    }
};
