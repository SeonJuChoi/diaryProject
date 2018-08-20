<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaryUploadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_upload', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('diary_id');
            $table->string('filename');
            $table->string('path');
            $table->timestamps();
            $table->foreign('diary_id')
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
        Schema::dropIfExists('diary_upload');
    }
}
