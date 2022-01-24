<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->primary();
            $table->id('event_id')->comment('イベント');
            $table->id('talk_id')->comment('発表者');
            $table->integer('order')->comment('順番');
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('talk_id')->references('id')->on('talks');

            $table->unique(['event_id', 'talk_id', 'order']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
