<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
           $table->string('id', 20);
           $table->primary('id', 'games_pk');
           $table->string('name', 100);
           $table->string('version', 10)->nullable();
           $table->string('base_url',100);
           $table->string('game_url', 100)->nullable();
           $table->string('setup_url', 100)->nullable();
           $table->string('maintenance_url', 100)->nullable();
           $table->string('database_name', 100)->nullable();
           $table->string('host_name', 100)->nullable();
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
        Schema::dropIfExists('games');
    }
}
