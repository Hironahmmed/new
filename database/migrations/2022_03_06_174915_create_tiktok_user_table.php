<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiktokUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiktok_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tiktok_id');
            $table->integer('user_id');
            $table->foreign('tiktok_id')
            ->references('id')->on('tiktoks')
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
        Schema::dropIfExists('tiktok_user');
    }
}
