<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiktoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiktoks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('slug');
            $table->string('title');
            $table->bigInteger('sell_on');
            $table->bigInteger('impression');
            $table->bigInteger('days');
            $table->decimal('ad_cost',$precision = 20, $scale = 2);
            $table->bigInteger('conversation');
            $table->decimal('price',$precision = 8, $scale = 2);
            $table->decimal('cost',$precision = 8, $scale = 2);
            $table->decimal('profit',$precision = 8, $scale = 2);
            $table->bigInteger('order');
            $table->decimal('revinue',$precision = 20, $scale = 2);
            $table->bigInteger('alaxa');
            $table->string('aliexpress_link', 500);
            $table->string('tiktok_link', 500);
            $table->string('page_name', 500);
            $table->string('shopify_website', 500);
            $table->string('youtube_link', 500)->nullable();
            $table->string('shopify_link', 500);
            $table->string('image_one', 500);
            $table->string('image_two', 500);
            $table->string('image_three', 500);
            $table->string('image_four', 500);
            $table->string('image_five', 500);
            $table->string('competitor1', 500);
            $table->string('competitor2', 500)->nullable();
            $table->string('competitor3', 500)->nullable();
            $table->string('competitor4', 500)->nullable();
            $table->string('competitor5', 500)->nullable();
            $table->string('amazon', 500)->nullable();
            $table->string('ebay', 500)->nullable();
            $table->string('ad_create_date');
            $table->string('ad_seen_date');
            $table->text('ad_content')->nullable();
            $table->string('country');
            $table->string('action');
            $table->string('collection');
            $table->string('formate');
            $table->string('platform');
            $table->string('opportunity');
            $table->string('saturation');
            $table->string('privacy');
            $table->longText('body');
            $table->string('page_logo')->nullable()->default('123456789.jpg');
            $table->string('gif_one')->nullable()->default('123456789.gif');
            $table->string('gif_two')->nullable()->default('123456789.gif');
            $table->string('gif_three')->nullable()->default('123456789.gif');
            $table->string('thumbnail')->nullable()->default('123456789.jpg');
            $table->string('video')->nullable()->default('123456789.mp4');
            $table->integer('view_count')->default(0);
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
        Schema::dropIfExists('tiktoks');
    }
}
