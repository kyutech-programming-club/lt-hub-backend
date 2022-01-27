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
            $table->string('public_id')->unique()->comment('公開用ID');
            $table->string('name')->comment('名前');
            $table->string('email')->comment('メールアドレス');
            $table->string('avatar_url')->comment('アイコン');
            $table->string('firebase_id')->unique()->comment('FirebaseID');
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
