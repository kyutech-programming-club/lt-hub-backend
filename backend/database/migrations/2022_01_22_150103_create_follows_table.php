<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->id()->primary();
            $table->id('follow_id')->comment('フォロー');
            $table->id('follower_id')->comment('フォロワー');
            $table->timestamps();

            $table->foreign('follow_id')->references('id')->on('users');
            $table->foreign('follower_id')->references('id')->on('users');

            $table->unique(['follow_id', 'follower_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follows');
    }
}
