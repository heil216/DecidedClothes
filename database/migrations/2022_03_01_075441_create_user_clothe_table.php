<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserClotheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User_clothe', function (Blueprint $table) {
            $table->biginteger('users_id')->unsigned();    //students,subjectsテーブルのidが
            $table->biginteger('clothes_id')->unsigned();    //bigIncrementであった場合はbigIntegerにする
            $table->primary(['users_id', 'clothes_id']);
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('User_clothe');
    }
}
