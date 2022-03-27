<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopifies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('shopify_link', 500);
            $table->string('shopify_traffic', 500);
            $table->string('shopify_all_link', 500);
            $table->string('image_one', 500);
            $table->string('title_one', 500);
            $table->string('shopify_one', 500);
            $table->string('ali_one', 500);
            $table->string('image_two', 500);
            $table->string('title_two', 500);
            $table->string('shopify_two', 500);
            $table->string('ali_two', 500);
            $table->string('image_three', 500);
            $table->string('title_three', 500);
            $table->string('shopify_three', 500);
            $table->string('ali_three', 500);
            $table->string('image_four', 500);
            $table->string('title_four', 500);
            $table->string('ali_four', 500);
            $table->string('shopify_four', 500);
            $table->boolean('is_approved')->default(false);
            $table->foreign('user_id')
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
        Schema::dropIfExists('shopifies');
    }
}
