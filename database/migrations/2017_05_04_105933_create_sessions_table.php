<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id', 30);
            $table->bigInteger('user_id');
            $table->index('user_id', 'user_id_idx');
            $table->primary(['id', 'user_id'], 'sessions_pk');
            $table->integer('create_date');
            $table->integer('update_date');
            $table->integer('expiry_date');
            $table->integer('type')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
