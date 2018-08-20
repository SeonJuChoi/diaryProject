<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaryCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_comment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('diary_id');
            $table->string('content');
            $table->unsignedInteger('writer');
            $table->dateTime('reg_date');
            $table->timestamps();
            $table->foreign('diary_id')
                ->references('id')->on('diary')
                ->onDelete('cascade');
            $table->foreign('writer')
                ->references('id')->on('diary')
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
        Schema::dropIfExists('diary_comment');
    }
}
