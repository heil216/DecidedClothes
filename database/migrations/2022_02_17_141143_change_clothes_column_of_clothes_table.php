<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeClothesColumnOfClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clothes', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clothes', function (Blueprint $table) {
            $table->string('clothes_name')->nullable()->change();
            $table->string('clothes_type')->nullable()->change();
            $table->string('clothes_thickness')->nullable()->change();
            $table->string('clothes_style')->nullable()->change();
            $table->string('clothes_color')->nullable()->change();
            $table->string('where_buy')->nullable()->change();
        });
    }
}
