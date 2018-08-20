<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filename', 100);
            $table->string('path', 100);
            $table->unsignedInteger('writer');
            $table->dateTime('reg_date');
            $table->unsignedInteger('category');
            $table->unsignedInteger('theme');
            $table->timestamps();
            $table->foreign('theme')
                ->references('id')->on('theme')
                ->onDelete('cascade');
            $table->foreign('writer')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('category')
                ->references('id')->on('gallery_book')
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
        Schema::dropIfExists('gallery');
    }
}
