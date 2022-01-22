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
            $table->id();
            $table->string('title')->comment('タイトル');
            $table->string('description')->comment('説明');
            $table->date('startTime')->comment('開始時間');
            $table->date('endTime')->comment('終了時間');
            $table->string('location')->comment('場所');
            $table->string('hostId')->comment('主催者');
            $table->string('state')->comment('状態');
            $table->integer('participants')->comment('参加人数');
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
        Schema::dropIfExists('events');
    }
}
