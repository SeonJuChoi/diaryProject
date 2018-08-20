<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaryStickerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_sticker', function (Blueprint $table) {
            $table->increments('sticker_id');
            $table->unsignedInteger('diary_id');
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
        Schema::dropIfExists('diary_sticker');
    }
}
