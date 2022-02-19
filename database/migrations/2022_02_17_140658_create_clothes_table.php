<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('clothes_name')->nullable();
            $table->string('clothes_type')->nullable();
            $table->string('clothes_thickness')->nullable();
            $table->string('clothes_style')->nullable();
            $table->string('clothes_color')->nullable();
            $table->string('where_buy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothes');
    }
}
