<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->text('content');
            $table->dateTime('reg_date');
            $table->string('mood',50);
            $table->unsignedInteger('writer');
            $table->string('weather', 50);
            $table->unsignedInteger('category');
            $table->unsignedInteger('theme')->nullable();
            $table->boolean('privacy');
            $table->json('form')->nullable();
            $table->timestamps();
            $table->foreign('writer')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('category')
                ->references('id')->on('diary_book')
                ->onDelete('cascade');
            $table->foreign('theme')
                ->references('id')->on('theme')
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
        Schema::dropIfExists('diary');
    }
}
