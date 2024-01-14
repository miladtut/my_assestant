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
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('user_id');
            $table->mediumText('comment')->nullable();
            $table->string('attachment')->nullable();
            $table->integer('rating')->default(0);
            $table->unsignedBigInteger('order_id')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('item_campaign_id')->nullable();
            $table->boolean('status')->nullable()->default(true);
            $table->unsignedBigInteger('module_id')->index('reviews_module_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
