<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('content');
            $table->unsignedInteger('user_num');
            $table->tinyInteger('important_level')->nullable();
            $table->dateTime('created_date');
            $table->string('color', 50)->nullable();
            $table->timestamps();
            $table->foreign('user_num')
                ->references('id')->on('users')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memo');
    }
}
