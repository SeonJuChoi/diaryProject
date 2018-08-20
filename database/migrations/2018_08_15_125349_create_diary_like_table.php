<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaryLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_like', function (Blueprint $table) {
            $table->unsignedInteger('diary_id');
            $table->unsignedInteger('user_num');
            $table->foreign('diary_id')
                ->references('id')->on('diary')
                ->onDelete('cascade');
            $table->foreign('user_num')
                ->references('id')->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('diary_like');
    }
}
