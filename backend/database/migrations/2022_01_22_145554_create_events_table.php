<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('title')->comment('タイトル');
            $table->string('description')->nullable()->comment('説明');
            $table->date('start_time')->comment('開始時間');
            $table->date('end_time')->comment('終了時間');
            $table->string('location')->nullable()->comment('場所');
            $table->id('user_id')->comment('主催者');
            $table->string('state')->comment('公開範囲');
            $table->integer('participant_number')->comment('参加人数');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
