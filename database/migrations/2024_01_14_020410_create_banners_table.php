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
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('type');
            $table->string('image')->nullable();
            $table->boolean('status')->default(true);
            $table->string('data');
            $table->timestamps();
            $table->unsignedBigInteger('zone_id');
            $table->unsignedBigInteger('module_id')->index('banners_module_id_foreign');
            $table->boolean('featured')->default(false);
            $table->string('default_link')->nullable();
            $table->string('created_by')->default('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
};
