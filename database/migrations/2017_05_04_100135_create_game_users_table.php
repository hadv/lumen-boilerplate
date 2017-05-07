<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_users', function (Blueprint $table) {
            $table->string('system_id', 100);
            $table->string('game_id', 20);
            $table->string('gamer_id', 20);
            $table->char('game_status', 1);
            $table->dateTime('created_at')->nullable();
            $table->string('created_by', 100)->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->string('updated_by', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_users');
    }
}
