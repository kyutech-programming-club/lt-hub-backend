<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('video_url')->nullable()->comment('動画');
            $table->string('slide_url')->nullable()->comment('スライド');
            $table->timestamps();

            $table->foreignId('talk_id')->constrained('talks')->comment('トーク');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medias');
    }
}
