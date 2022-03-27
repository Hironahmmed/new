<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('role_id')->default(3);
            $table->string('name');
            $table->string('username')->unique();
            $table->boolean('status')->default(true);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('about')->nullable();
            $table->string('image')->default('default-user.png');

            // $table->string('stripe_id')->index()->nullable();
            // $table->string('card_brand')->nullable();
            // $table->string('card_last_four',4)->nullable();
            // $table->string('trial_ends_at')->nullable();
            // $table->string('plan_name')->nullable();
            $table->string('reffered_by')->nullable();
            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
